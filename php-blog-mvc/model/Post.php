<?php


class Post
{
    protected $id;
    protected $title;
    protected $teaser;
    protected $content;
    protected $createDay;

    public function __construct($title,$teaser,$content)
    {
        $this->title = $title;
        $this->teaser = $teaser;
        $this->content = $content;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param false|string $createDay
     */
    public function setCreateDay($createDay)
    {
        $this->createDay = $createDay;
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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return false|string
     */
    public function getCreateDay()
    {
        return $this->createDay;
    }

    /**
     * @return mixed
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }


}