<?php

namespace App\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle(string $value): BlogPostBuilderInterface
    {
        $this->blogPost->title = $value;

        return $this;
    }

    public function setBody(string $value): BlogPostBuilderInterface
    {
        $this->blogPost->body = $value;

        return $this;
    }

    public function setCategory(array $value): BlogPostBuilderInterface
    {
        $this->blogPost->category = $value;

        return $this;
    }

    public function setTags(array $value): BlogPostBuilderInterface
    {
        $this->blogPost->tags = $value;

        return $this;
    }

    public function getBlogPost(): BlogPost
    {
        $result = $this->blogPost;
        $this->create();

        return $result;
    }
}
