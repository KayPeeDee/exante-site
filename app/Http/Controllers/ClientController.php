<?php

namespace App\Http\Controllers;

use App\Repositories\ClientRepository;
use Illuminate\Http\Request;
use App\Repositories\MediaRepository;


class ClientController extends Controller
{
    protected $clientRepository;
    protected $mediaRepository;

    public function __construct(ClientRepository $clientRepository, MediaRepository $mediaRepository)
    {
        $this->clientRepository = $clientRepository;
        $this->mediaRepository = $mediaRepository;
        $this->middleware('auth');
    }

    public function createClientPage($sectionId)
    {
        return view('admin-portal.sections.clients.create-client', compact('sectionId'));
    }

    public function createClient(Request $request, $sectionId)
    {
        $input = $request->all();
        if ($request->hasFile('logo')) {
            $fileName = $this->mediaRepository->uploadImage($request->file('logo'));
            $input['logo'] = $fileName;
        }
        $this->clientRepository->validator($input)->validate();
        $this->clientRepository->createClient($input);
        return redirect()->route('our-clients', $sectionId);
    }

    public function getAllClients()
    {

    }

    public function getClientsBySectionId($sectionId)
    {
        $clients = $this->clientRepository->getClientsBySectionId($sectionId);
        // dd($clients);
        return view('admin-portal.sections.clients.our-clients', compact('sectionId', 'clients'));
    }

    public function getClientById($sectionId, $id)
    {
        $client = $this->clientRepository->getClientById($id);
        return view('admin-portal.sections.clients.update-client', compact('client'));
    }

    public function updateClient(Request $request, $id)
    {


    }

    public function deleteClient($sectionId, $id)
    {
        $this->clientRepository->deleteClient($id);
        return  redirect()->route('our-clients', $sectionId);
    }
}
