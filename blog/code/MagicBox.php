<?php

class MagicBox 
{
    private $blogPosts = array();
    private $dbFilepath;

    public function __construct()
    {
        $this->dbFilepath = __DIR__.'/blogposts.bin';

        try {
            $this->retrieveAllBlogPosts();
        } catch (\Exception $e) {
            // Do nothing, this might happen the first time the dbFile is created
        }
    }

    public function save()
    {
        $this->writeToDb(serialize($this->blogPosts));
    }

    public function retrieveAllBlogPosts()
    {
        $this->blogPosts = unserialize($this->readFromDb());
        return $this->blogPosts;
    }

    private function writeToDb($data)
    {
        $res = @file_put_contents($this->dbFilepath, $data);

        if ($res === false) {
            throw new \Exception("Cannot save the blogPosts: can't write to {$this->dbFilePath}");
        }
    }

    private function readFromDb()
    {
        $res = @file_get_contents($this->dbFilepath);

        if ($res === false) {
            throw new \Exception("Cannot retrieve the blogPosts: can't read from {$this->dbFilePath}");
        }

        return $res;
    }

    public function putBlogPost($blogPost)
    {
        $this->blogPosts[] = $blogPost;
    }
}