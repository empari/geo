<?php
namespace Empari\Geo\Fractal\Presenters;


use Empari\Geo\Fractal\Transformers\CityTransformer;
use Prettus\Repository\Presenter\ModelFractalPresenter;

class CityPresenter extends ModelFractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CityTransformer();
    }
}