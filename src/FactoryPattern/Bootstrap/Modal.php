<?php

namespace DesignPatterns\FactoryPattern\Bootstrap;

use DesignPatterns\FactoryPattern\AbstractUI;

/**
 * Class Modal
 * @package \DesignPatterns\FactoryPattern\Bootstrap
 */
class Modal implements AbstractUI\Modal {

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

    public function renderOutput()
    {
        $output = '';
        $output .= '
<div id="' . $this->getId() . '" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">' . $this->getTitle() . '</h4>
      </div>
      <div class="modal-body">
        ' . $this->getBody() . '
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        ';
        return $output;
    }

    public function renderLink($label) {
        return '<a
            href="#' . $this->getId() . '"
            role="button"
            data-toggle="modal">'
        . $label
        . '</a>';
    }

} 