<?php
class BlogPost 
{
    private $id;
    private $title;
    private $text;
    private $publicationDate;

    public function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
        $this->publicationDate = new \DateTime('now');
    }

    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}