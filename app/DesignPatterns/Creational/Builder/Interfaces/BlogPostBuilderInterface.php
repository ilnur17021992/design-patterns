<?php

namespace App\DesignPatterns\Creational\Builder\Interfaces;

use App\DesignPatterns\Creational\Builder\BlogPost;

interface BlogPostBuilderInterface
{
    public function create(): BlogPostBuilderInterface;
    public function setTitle(string $value): BlogPostBuilderInterface;
    public function setBody(string $value): BlogPostBuilderInterface;
    public function setCategory(array $value): BlogPostBuilderInterface;
    public function setTags(array $value): BlogPostBuilderInterface;
    public function getBlogPost(): BlogPost;
}
