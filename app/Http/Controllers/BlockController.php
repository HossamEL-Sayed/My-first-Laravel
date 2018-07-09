<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Block;
use App\Task;

class BlockController extends Controller
{
	//main page 

	public function index()
    {
        $blocks = Block::all();

    return view('blocks.block', compact('blocks'));
	}
    
    //create new block

    public function createBlock()
    {
    return view('blocks.createBlock');
    }

    public function storeBlock()
    {
        $this->validate(request(),[

            'block' => 'required'

        ]);

        block::create([

            'block' => request('block')

        ]);

        return redirect('/block');
    }

    //read the category tasks

    public function showBlock(BLock $block)
    {

    return view('blocks.showBlock', compact('block'));
    }

    //edit the block name

    public function editBlock(Block $block)
    {
    return view('blocks.editBlock', compact('block'));
    }

    public function updateBlock(Block $block)
    {

        $this->validate(request(),[

            'block' => 'required'

        ]);

        $block->block = request('block');

        $block->save();

        return redirect('/block');
    }

    //delete the block

    public function deleteBlock($id)
    {
        Block::find($id)->delete();

    return redirect('/block');
    }
}
