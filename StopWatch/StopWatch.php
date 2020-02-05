<?php


class StopWatch
{
    private $starTime;
    private $endTime;

    /**
     * @return mixed
     */
    public function getStarTime()
    {
        return $this->starTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function __construct()
    {
        $this->starTime = microtime(true);
    }
    public function start(){
        $this->starTime = microtime(true);
    }
    public function stop(){
        $this->endTime  = microtime(true);
    }
    public function getElapsedTime(){
        return $this->endTime - $this->starTime;
    }
    

}