<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUserRolProductRequest;
use App\Http\Requests\UpdateUserRolProductRequest;
use App\Repositories\UserRolProductRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserRolProductController extends AppBaseController
{
    /** @var  UserRolProductRepository */
    private $userRolProductRepository;

    public function __construct(UserRolProductRepository $userRolProductRepo)
    {
        $this->userRolProductRepository = $userRolProductRepo;
    }

    /**
     * Display a listing of the UserRolProduct.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRolProductRepository->pushCriteria(new RequestCriteria($request));
        $userRolProducts = $this->userRolProductRepository->all();

        return view('userRolProducts.index')
            ->with('userRolProducts', $userRolProducts);
    }

    /**
     * Show the form for creating a new UserRolProduct.
     *
     * @return Response
     */
    public function create()
    {
        return view('userRolProducts.create');
    }

    /**
     * Store a newly created UserRolProduct in storage.
     *
     * @param CreateUserRolProductRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRolProductRequest $request)
    {
        $input = $request->all();

        $userRolProduct = $this->userRolProductRepository->create($input);

        Flash::success('UserRolProduct saved successfully.');

        return redirect(route('userRolProducts.index'));
    }

    /**
     * Display the specified UserRolProduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userRolProduct = $this->userRolProductRepository->findWithoutFail($id);

        if (empty($userRolProduct)) {
            Flash::error('UserRolProduct not found');

            return redirect(route('userRolProducts.index'));
        }

        return view('userRolProducts.show')->with('userRolProduct', $userRolProduct);
    }

    /**
     * Show the form for editing the specified UserRolProduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userRolProduct = $this->userRolProductRepository->findWithoutFail($id);

        if (empty($userRolProduct)) {
            Flash::error('UserRolProduct not found');

            return redirect(route('userRolProducts.index'));
        }

        return view('userRolProducts.edit')->with('userRolProduct', $userRolProduct);
    }

    /**
     * Update the specified UserRolProduct in storage.
     *
     * @param  int              $id
     * @param UpdateUserRolProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRolProductRequest $request)
    {
        $userRolProduct = $this->userRolProductRepository->findWithoutFail($id);

        if (empty($userRolProduct)) {
            Flash::error('UserRolProduct not found');

            return redirect(route('userRolProducts.index'));
        }

        $userRolProduct = $this->userRolProductRepository->update($request->all(), $id);

        Flash::success('UserRolProduct updated successfully.');

        return redirect(route('userRolProducts.index'));
    }

    /**
     * Remove the specified UserRolProduct from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userRolProduct = $this->userRolProductRepository->findWithoutFail($id);

        if (empty($userRolProduct)) {
            Flash::error('UserRolProduct not found');

            return redirect(route('userRolProducts.index'));
        }

        $this->userRolProductRepository->delete($id);

        Flash::success('UserRolProduct deleted successfully.');

        return redirect(route('userRolProducts.index'));
    }
}
