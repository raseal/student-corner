<?php

declare(strict_types=1);

namespace StudentCorner\Offer\Application\Publish;

use Shared\Domain\Bus\Command\Command;

final class PublishOfferCommand implements Command
{
    private string $id;
    private string $name;
    private string $school;
    private string $course;
    private string $teacher;
    private int $price;
    private string $userId;

    public function __construct(
        string $id,
        string $name,
        string $school,
        string $course,
        string $teacher,
        int $price,
        string $userId
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->school = $school;
        $this->course = $course;
        $this->teacher = $teacher;
        $this->price = $price;
        $this->userId = $userId;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function school(): string
    {
        return $this->school;
    }

    public function course(): string
    {
        return $this->course;
    }

    public function teacher(): string
    {
        return $this->teacher;
    }

    public function price(): int
    {
        return $this->price;
    }

    public function userId(): string
    {
        return $this->userId;
    }
}
