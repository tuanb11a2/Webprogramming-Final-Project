<?php


class guestController extends Controller
{
    private $emailModel;
    public function __construct()
    {
        $this->emailModel = $this->model('Email');
    }

    public function index()
    {
        $directory = getAbsolutePath();
        $this->emailModel->setEmail($_POST["guest-mail"]);
        $this->emailModel->updateEmail();
        header("Location: http://$_SERVER[HTTP_HOST]$directory/");
    }


}