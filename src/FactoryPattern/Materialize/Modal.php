<?php

namespace DesignPatterns\FactoryPattern\Materialize;

use DesignPatterns\FactoryPattern\AbstractUI;


class Modal implements AbstractUI\Modal
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param string $id
     */
    public function __construct($id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function renderOutput()
    {
        return '
          <div id="' . $this->getId() . '" class="modal">
            <div class="modal-content">
              <h4>' . $this->getTitle() . '</h4>
              ' . $this->getBody() . '
            </div>
            <div class="modal-footer">
              <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Close</a>
            </div>
          </div>
          <script>
          $(document).ready(function(){
            $(".modal-trigger").leanModal();
          });
          </script>
          ';
    }

    /**
     * @param $label
     * @return string
     */
    public function renderLink($label)
    {
        return '  <a class="modal-trigger" href="#' . $this->getId() . '">' . $label . '</a>';
    }
}