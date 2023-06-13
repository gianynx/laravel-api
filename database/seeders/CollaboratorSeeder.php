<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collaborator;

class CollaboratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collaborators = [
            [
                "name" => "Gianmarco",
                "surname" => "Incocciati",
                "image" => "https://img.freepik.com/premium-vector/businessman-avatar-character_24877-18287.jpg",
                "email" => "gianinc@gmail.com",
                "username" => "gianynx"
            ],
            [
                "name" => "Mario",
                "surname" => "Rossi",
                "image" => "https://img.freepik.com/premium-vector/man-cartoon-male-isolated_24877-43975.jpg",
                "email" => "mariorossi@gmail.com",
                "username" => "mario"
            ],
            [
                "name" => "Luca",
                "surname" => "Giorgioni",
                "image" => "https://img.freepik.com/premium-vector/businessman-avatar-character_24877-18286.jpg",
                "email" => "lucagiorgi@gmail.com",
                "username" => "luca"
            ],
            [
                "name" => "Francesco",
                "surname" => "Relli",
                "image" => "https://img.freepik.com/premium-vector/businessman-avatar-character_24877-18288.jpg",
                "email" => "frarelli@gmail.com",
                "username" => "francesco"
            ],
            [
                "name" => "Antonio",
                "surname" => "Terrinoni",
                "image" => "https://img.freepik.com/premium-vector/businessman-avatar-character_24877-18284.jpg",
                "email" => "antonioterri@gmail.com",
                "username" => "antonio"
            ],
            [
                "name" => "Luisa",
                "surname" => "Nelli",
                "image" => "https://img.freepik.com/premium-vector/cute-little-boy-character-vector-illustration-design_24877-18202.jpg",
                "email" => "luisanelli@gmail.com",
                "username" => "luisa"
            ]
        ];

        foreach($collaborators as $collaborator)
        {
            $newCollaborator = new Collaborator();
            $newCollaborator->name = $collaborator['name'];
            $newCollaborator->surname = $collaborator['surname'];
            $newCollaborator->image = $collaborator['image'];
            $newCollaborator->email = $collaborator['email'];
            $newCollaborator->username = $collaborator['username'];
            $newCollaborator->save();
        }
    }
}
