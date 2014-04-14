<?php
/**
 * Timeline layout itself
 */
/* @var $this CdVerticalTimeLine */

echo CHtml::openTag('div', $this->containerOptions);
echo CHtml::openTag('ul', $this->listOptions);

foreach ( $this->events as $event )
{
    echo $this->getEventContent($event);
}

echo CHtml::closeTag('ul');
echo CHtml::closeTag('div');