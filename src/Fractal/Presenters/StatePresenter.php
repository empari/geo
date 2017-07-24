<?php
namespace Empari\Geo\Fractal\Presenters;

use Empari\Geo\Fractal\Transformers\StateTransformer;
use Prettus\Repository\Presenter\ModelFractalPresenter;

class StatePresenter extends ModelFractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new StateTransformer();
    }
}