<?php

declare(strict_types=1);

namespace StudentCorner\User\Domain;

final class UserSecurityToken
{
    private UserId $id;
    private UserEmail $email;

    private function __construct(UserId $id, UserEmail $email)
    {
        $this->id = $id;
        $this->email = $email;
    }

    public static function fromUser(User $user): self
    {
        return new self($user->id(), $user->email());
    }

    public function id(): UserId
    {
        return $this->id;
    }

    public function email(): UserEmail
    {
        return $this->email;
    }
}
