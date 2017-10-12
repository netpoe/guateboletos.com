<?php 

namespace App\Form\Front\Event;

use EBM\Form\AbstractBaseForm;
use EBM\Field\Field;

class SeatSelectionForm extends AbstractBaseForm
{
    public function __construct($eventGroup = null)
    {
        parent::__construct();

        //
    }

    public function setFields()
    {
        $this->addField('date')
            ->setType(Field::TYPE_RADIO)
            ->setLabel('')
            ->setOptions([
                [
                    'key' => '2017-11-15',
                    'value' => '<span class="day">15</span><span class="month">de Noviembre 2017</span>'
                ],
                [
                    'key' => '2017-11-16',
                    'value' => '<span class="day">16</span><span class="month">de Noviembre 2017</span>'
                ],
                [
                    'key' => '2017-11-17',
                    'value' => '<span class="day">17</span><span class="month">de Noviembre 2017</span>'
                ],
            ]);

        $this->addField('quantity')
            ->setLabel('')
            ->setHint('70 boletos disponibles para la fecha que seleccionaste')
            ->setValue(1);

        return $this;
    }

    public function setOnPostActionString()
    {
        return $this;
    }
}