<?php

namespace App\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostManager
{
    private $builder;

    public function setBuilder(BlogPostBuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;
    }

    public function createCleanPost()
    {
        $blogPost = $this->builder->getBlogPost();

        return $blogPost;
    }

    public function createNewPostIt()
    {
        $blogPost = $this->builder
            ->setTitle('New Post about IT')
            ->setBody('This is a new post about IT')
            ->setCategory(['IT'])
            ->setTags(['IT', 'PHP'])
            ->getBlogPost();

        return $blogPost;
    }

    public function createNewPostCats()
    {
        $blogPost = $this->builder
            ->setTitle('New Post about cats')
            ->setCategory(['Cats'])
            ->setTags(['Cats', 'Pets'])
            ->getBlogPost();

        return $blogPost;
    }
}
