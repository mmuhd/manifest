<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\User;


class Settings extends Component
{	
	public $users, $user, $newName, $origName, $userId, $userName, $newTitle, $newStatus, $newRole;
	public $name, $email, $password, $title, $role, $status, $selected_id;
    public $updateMode = false;
	public $createMode = false;

	 public function mount(User $user)
    {
        $this->userId = $user->id;
        $this->userName = $user->name;
        $this->origName = $user->name;

        $this->init($user); // initialize the component state
    }


    public function render()
    {
        $this->users = \App\Models\User::where('status', '1')->get();

        return view('livewire.settings');
    }



    public function save()
    {
        $user = User::findOrFail($this->userId);
       
        $user->name = $newName ?? null;
        $user->title = $newTitle ?? null;
        $user->status = $newStatus ?? null;
        $user->role = $newRole ?? null;
        $user->save();

        $this->init($user); // re-initialize the component state with fresh data after saving
    }

    private function init(User $user)
    {
        $this->origName = $user->name;
        $this->newName = $this->origName;
    }


    //Crud
    public function showCreate()
    {
        $this->createMode = true;
        
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->status = null;
        $this->title = null;
        $this->role = null;
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:5',
            'status' => 'required',
            'title' => 'required',
            'role' => 'required',
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'status' => $this->status,
            'title' => $this->title,
            'role' => $this->role,
        ]);
        $this->resetInput();
    }
    public function edit($id)
    {
        $record = User::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->password = $record->password;
        $this->status = $record->status;
        $this->title = $record->title;
        $this->role = $record->role;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'password' => 'required|min:5',
            'status' => 'required',
            'title' => 'required',
            'role' => 'required',
        ]);
        if ($this->selected_id) {
            $record = User::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'password' => $this->password,
                'status' => $this->status,
                'title' => $this->title,
                'role' => $this->role,
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }
    }
}
