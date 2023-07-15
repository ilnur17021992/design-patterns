<?php

namespace App\DesignPatterns\Structural\DTO;

use Illuminate\Http\Request;

class UserDTO4
{
    public int $id;
    public string $firstName;
    public string $lastName;

    public static function createFromRequest(Request $request): self
    {
        return self::createFromArray($request->toArray());
    }

    public static function createFromArray(array $data): self
    {
        // dd($data);
        $dto = new self();

        $dto->id = $data['id'];
        $dto->firstName = $data['firstName'];
        $dto->lastName = $data['lastName'];

        return $dto;
    }
}
