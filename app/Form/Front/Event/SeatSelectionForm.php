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

        $this->addField('email')
            ->setType(Field::TYPE_TEXT)
            ->setPlaceholder('personachilera@correo.com')
            ->setLabel('¿A qué correo enviamos tus boletos?');

        $this->addField('name')
            ->setType(Field::TYPE_TEXT)
            ->setLabel('Tu nombre como aparece en la tarjeta');

        $this->addField('credit_card_number')
            ->setType(Field::TYPE_TEXT)
            ->setPlaceholder('XXXX XXXX XXXX XXXX')
            ->setLabel('Número de tu tarjeta')
            ->setHint('deben ser 16 dígitos');

        $this->addField('cvv')
            ->setType(Field::TYPE_TEXT)
            ->setLabel('Código de seguridad')
            ->setPlaceholder('CVV')
            ->setHint('son 3 dígitos que aparecen detrás de tu tarjeta');

        $this->addField('expiration_year')
            ->setType(Field::TYPE_TEXT)
            ->setLabel('Año de expiración')
            ->setPlaceholder('YY');

        $this->addField('expiration_month')
            ->setType(Field::TYPE_TEXT)
            ->setLabel('Mes de expiración')
            ->setPlaceholder('MM');

        return $this;
    }

    public function setOnPostActionString()
    {
        return $this;
    }
}