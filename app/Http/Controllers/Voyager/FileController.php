<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBreadController as BaseVoyagerBreadController;

class FileController extends BaseVoyagerBreadController
{
    /**
     * Store BREAD.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $dataType = Voyager::model('DataType');
            $res = $dataType->updateDataType($request->all(), true);
            $data = $res
                ? $this->alertSuccess(__('voyager::bread.success_created_bread'))
                : $this->alertError(__('voyager::bread.error_creating_bread'));
            if ($res) {
                event(new BreadAdded($dataType, $data));
            }

            return redirect()->route('voyager.bread.index')->with($data);
        } catch (Exception $e) {
            return redirect()->route('voyager.bread.index')->with($this->alertException($e, 'Saving Failed'));
        }
    }
}
