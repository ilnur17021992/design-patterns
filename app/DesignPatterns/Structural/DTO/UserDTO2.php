<?php

namespace App\DesignPatterns\Structural\DTO;

class UserDTO2
{
    public int $id;
    public string $firstName;
    public string $lastName;

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}
