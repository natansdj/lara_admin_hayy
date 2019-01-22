<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateLoloRequest;
use App\Http\Requests\UpdateLoloRequest;
use App\Repositories\LoloRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Lolo;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LoloController extends InfyOmBaseController
{
    /** @var  LoloRepository */
    private $loloRepository;

    public function __construct(LoloRepository $loloRepo)
    {
        $this->loloRepository = $loloRepo;
    }

    /**
     * Display a listing of the Lolo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->loloRepository->pushCriteria(new RequestCriteria($request));
        $lolos = $this->loloRepository->all();
        return view('admin.lolos.index')
            ->with('lolos', $lolos);
    }

    /**
     * Show the form for creating a new Lolo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.lolos.create');
    }

    /**
     * Store a newly created Lolo in storage.
     *
     * @param CreateLoloRequest $request
     *
     * @return Response
     */
    public function store(CreateLoloRequest $request)
    {
        $input = $request->all();

        $lolo = $this->loloRepository->create($input);

        Flash::success('Lolo saved successfully.');

        return redirect(route('admin.lolos.index'));
    }

    /**
     * Display the specified Lolo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lolo = $this->loloRepository->findWithoutFail($id);

        if (empty($lolo)) {
            Flash::error('Lolo not found');

            return redirect(route('lolos.index'));
        }

        return view('admin.lolos.show')->with('lolo', $lolo);
    }

    /**
     * Show the form for editing the specified Lolo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lolo = $this->loloRepository->findWithoutFail($id);

        if (empty($lolo)) {
            Flash::error('Lolo not found');

            return redirect(route('lolos.index'));
        }

        return view('admin.lolos.edit')->with('lolo', $lolo);
    }

    /**
     * Update the specified Lolo in storage.
     *
     * @param  int              $id
     * @param UpdateLoloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLoloRequest $request)
    {
        $lolo = $this->loloRepository->findWithoutFail($id);

        

        if (empty($lolo)) {
            Flash::error('Lolo not found');

            return redirect(route('lolos.index'));
        }

        $lolo = $this->loloRepository->update($request->all(), $id);

        Flash::success('Lolo updated successfully.');

        return redirect(route('admin.lolos.index'));
    }

    /**
     * Remove the specified Lolo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.lolos.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Lolo::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.lolos.index'))->with('success', Lang::get('message.success.delete'));

       }

}
