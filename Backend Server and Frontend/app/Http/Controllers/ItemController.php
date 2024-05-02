<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Validation\Rule;

use App\Models\Item;
use App\Models\Category;
use App\Models\Tag;

use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index(Item $model)
    {

        $user_id = auth()->user()->getAuthIdentifier();

        $purchases = DB::table('purchases')
            ->select('item_id')
            ->where('user_id', '=', $user_id)
            ->get();

        $own_purchases = array();
        foreach($purchases as $purchase) {
            $own_purchases[$purchase->item_id] = true;
        }

        $offers = DB::table('items')
            ->select('id', 'created_at')
            ->where('owner', '=', $user_id)
            ->get();

        $own_offers = array();
        foreach($offers as $offer) {
            $own_offers[$offer->id] = $offer->created_at;
        }

        $reviews = DB::table('reviews')
            ->select('id', 'created_at')
            ->get();

        //----------------------------------------------------------------------------------
        $ratings = array();
        foreach($model->all() as $offer) {
            $reviews = DB::table('reviews')
                ->select('review', 'description', 'updated_at')
                ->where('item_id', '=', $offer->id)
                //->where('user_id', '!=', $user_id)
                ->get();

            $review_count = count($reviews);

            if($review_count>0) {
                $review_average_sum = 0;
                $review_average_count = 0;
                foreach($reviews as $review) {
                    $review_average_sum += $review->review;
                    $review_average_count++;
                }
                $ratings[$offer->id] = intval(round($review_average_sum / $review_average_count));
            } else {
                //Average Review of Seller
                $ratings[$offer->id] = 9;
            }
        }
        //----------------------------------------------------------------------------------

        return view('laravel.items.index', ['items' => $model->all(), 'user_id' => $user_id, 'purchases' => $own_purchases, 'offers' => $own_offers, 'ratings' => $ratings]);
    }

    public function reset()
    {
        //dd($item);

        //Artisan::call('db:seed');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Artisan::call('migrate:refresh', [
            '--seed' => true,
        ]);
        //Artisan::call('db:seed');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        return redirect()->route('item-management')->with('succes', 'Data successfully reset');
    }

    public function offers(Item $model)
    {

        $user_id = auth()->user()->getAuthIdentifier();

        $offers = DB::table('items')
            ->select('id', 'created_at')
            ->where('owner', '=', $user_id)
            ->get();

        $own_offers = array();
        $ratings = array();
        foreach($offers as $offer) {
            $own_offers[$offer->id] = $offer->created_at;

            $reviews = DB::table('reviews')
                ->select('review', 'description', 'updated_at')
                ->where('item_id', '=', $offer->id)
                //->where('user_id', '!=', $user_id)
                ->get();

            $review_count = count($reviews);

            if($review_count>0) {
                $review_average_sum = 0;
                $review_average_count = 0;
                foreach($reviews as $review) {
                    $review_average_sum += $review->review;
                    $review_average_count++;
                }
                $ratings[$offer->id] = intval(round($review_average_sum / $review_average_count));
            } else {
                //Average Review of Seller
                $ratings[$offer->id] = 9;
            }
        }

        return view('laravel.items.offers', ['items' => $model->all(), 'user_id' => $user_id, 'offers' => $own_offers, 'ratings' => $ratings]);
    }

    public function purchases(Item $model)
    {

        $user_id = auth()->user()->getAuthIdentifier();

        $purchases = DB::table('purchases')
            ->select('item_id', 'created_at')
            ->where('user_id', '=', $user_id)
            ->get();

        $own_purchases = array();
        $ratings = array();
        foreach($purchases as $purchase) {
            $own_purchases[$purchase->item_id] = $purchase->created_at;

            $reviews = DB::table('reviews')
                ->select('review', 'description', 'updated_at')
                ->where('item_id', '=', $purchase->item_id)
                //->where('user_id', '!=', $user_id)
                ->get();

            $review_count = count($reviews);

            if($review_count>0) {
                $review_average_sum = 0;
                $review_average_count = 0;
                foreach($reviews as $review) {
                    $review_average_sum += $review->review;
                    $review_average_count++;
                }
                $ratings[$purchase->item_id] = intval(round($review_average_sum / $review_average_count));
            } else {
                //Average Review of Seller
                $ratings[$purchase->item_id] = 9;
            }
        }

        return view('laravel.items.purchases', ['items' => $model->all(), 'user_id' => $user_id, 'purchases' => $own_purchases, 'ratings' => $ratings]);
    }

    public function bestsellers(Item $model)
    {
        return view('laravel.items.bestsellers', ['items' => $model->all()]);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('laravel.items.create', compact('categories', 'tags'));
    }

    public function price_redirect()
    {
        return redirect()->route('item-new');

        /*$categories = Category::all();
        $tags = Tag::all();
        return view('laravel.items.create', compact('categories', 'tags'));*/
    }

    public function price(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'description' => ['required'],
            //'price' => ['required'],
            'status' => ['required'],
            'option' => ['required'],
            'upload' => ['required'],
        ]);

        $values = array(
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            //'price' => $request->get('price'),
            'status' => $request->get('status'),
            'options' => $request->get('option'),
            'upload' => $request->get('upload'),
        );

        if($request->file('upload')) {
            $values['upload'] = $request->file('upload')->store('/', 'items');
        }

        //dd($values);

        $price_suggestion = $this->price_suggestion($attributes);
        $prices = $price_suggestion['prices'];
        $price_plot = $price_suggestion['price_plot'];
        $average = $price_suggestion['average'];
        $median = $price_suggestion['median'];

        $categories = Category::all();
        $tags = Tag::all();
        return view('laravel.items.create', compact('categories', 'tags', 'values', 'prices', 'price_plot', 'average', 'median'));
    }

    public function price_suggestion($attributes) {

        $demo_products = array(
            15,
            4,
            13,
            11,
            12,
            14,
            29
        );

        $median = 0;

        $average_count = 0;
        $average_sum = 0;

        $prices = array();
        foreach($demo_products as $product_id) {
            $average_count++;

            $product = DB::table('items')
                ->select('id', 'name', 'price')
                ->where('id', '=', $product_id)
                ->first();//->toArray();

            /*$report_size = rand(-5, 5);
            $stix_objects = rand(-5, 0);
            $adversary_tactics = rand(-5, 0);*/

            $report_size = rand(0, 5);
            $stix_objects = rand(0, 5);
            $adversary_tactics = rand(0, 5);

            $total_delta = abs($report_size) + abs($stix_objects) + abs($adversary_tactics);

            if($report_size===0) {
                $report_size = "-";
            }
            if($stix_objects===0) {
                $stix_objects = "-";
            }
            if($adversary_tactics===0) {
                $adversary_tactics = "-";
            }

            $prices[] = array(
                'id' => $product->id,
                'title' => $product->name,
                'report_size' => $report_size,
                'stix_objects' => $stix_objects,
                'adversary_tactics' => $adversary_tactics,
                'total_delta' => $total_delta,
                'price' => $product->price,
            );

            $price_plot[] = $product->price;

            $average_sum += $product->price;
            if($product->id == 11) { //middle element
                $median = $product->price;
            }
        }

        $average = $average_sum/$average_count;

        $key_values = array_column($prices, 'total_delta');
        array_multisort($key_values, SORT_ASC, $prices);

        $return = array(
            'prices' => $prices,
            'price_plot' => $price_plot,
            'average' => intval(round($average, 0)),
            'median' => intval(round($median, 0))
        );

        //dd($return);

        return $return;
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            //'name' => ['required', 'unique:items'],
            'name' => ['required'],
            'description' => ['required'],
            //'price' => ['required'],
            'status' => ['required'],
            'option' => ['required'],
            'upload' => ['required'],
        ]);

        if($request->get('price') === null) {
            //dd("Error");

            $values = array(
                'name' => $request->get('name'),
                'description' => $request->get('description'),
                //'price' => $request->get('price'),
                'status' => $request->get('status'),
                'options' => $request->get('option'),
                'upload' => $request->get('upload'),
            );

            $price_suggestion = $this->price_suggestion($attributes);
            $prices = $price_suggestion['prices'];
            $price_plot = $price_suggestion['price_plot'];

            $error = 'Please enter a price';
            $categories = Category::all();
            $tags = Tag::all();
            return view('laravel.items.create', compact('categories', 'tags', 'values', 'prices', 'price_plot', 'error'));
            //return redirect()->route('item-view', ['id' => $id])->with('error', 'Purchase failed: Not enough tokens');
        }

        $item = Item::create([
            'name' => $request->get('name'),
            //'excerpt' => $request->get('excerpt'),
            'description' => $request->get('description'),
            //'category_id' => $request->get('choices-category'),
            'category_id' => 1,
            //'date' => $request->get('date'),
            'price' => $request->get('price'),
            'owner' => 1,
            'status' => $request->get('status'),
            //'show_on_homepage' => $request->get('show_on_homepage'),
            'options' => $request->get('option'),
            'download' => $request->get('upload'),
        ]);

        //dd($item);

        /*if($request->file('upload')) {
            $item->update([
                'download' => $request->file('upload')->store('/', 'items')
            ]);
        }*/

        return redirect()->route('item-offers')->with('succes', 'CTI record successfully edited');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('laravel.items.edit', compact('item', 'categories', 'tags'));
    }

    public function view($id)
    {
        $user_id = auth()->user()->getAuthIdentifier();

        $reviews = DB::table('reviews')
                    ->select('review', 'description', 'updated_at')
                    ->where('item_id', '=', $id)
                    //->where('user_id', '!=', $user_id)
                    ->get();

        $review_count = count($reviews);

        if($review_count>0) {
            $review_average_sum = 0;
            $review_average_count = 0;
            foreach($reviews as $review) {
                $review_average_sum += $review->review;
                $review_average_count++;
            }
            $review_average = intval(round($review_average_sum / $review_average_count));
        } else {
            //Average Review of Seller
            $review_average = 9;
        }

        $purchase = DB::table('purchases')
                    ->select('created_at')
                    ->where('item_id', '=', $id)
                    ->where('user_id', '=', $user_id)
                    ->first();

        $own_review = DB::table('reviews')
            ->select('review', 'description')
            ->where('item_id', '=', $id)
            ->where('user_id', '=', $user_id)
            ->first();

        /*POST HTTP REQUEST an 127.0.0.1:80
            item_id
            user_id*/

        $item = Item::find($id);

        if($user_id==$item->owner) {
            $owner = true;
        } else {
            $owner = false;
        }

        if(isset($purchase->created_at)) {
            $purchased = true;
        } else {
            $purchased = false;
        }

        $categories = Category::all();
        $tags = Tag::all();
        return view('laravel.items.view', compact('item', 'categories', 'tags', 'reviews', 'owner', 'purchased', 'purchase', 'own_review', 'review_count', 'review_average'));
    }

    public function buy($id)
    {
        $user_id = auth()->user()->getAuthIdentifier();

        $item = Item::find($id);

        $purchased = DB::table('purchases')
            ->select('price')
            ->where('item_id', '=', $id)
            ->where('user_id', '=', $user_id)
            ->first();
        //dd($purchased);
        if(isset($purchased->price)) {
            return redirect()->route('item-view', ['id' => $id])->with('error', 'Purchase failed: CTI record already purchased');
        }

        $settings = DB::table('settings')
            ->select('balance', 'subscription')
            ->where('user_id', '=', $user_id)
            ->first();

        if($settings->balance >= $item->price) {
            //Kauf + Abzug

            DB::table('settings')
                ->where('user_id', $user_id)
                ->update(['balance' => $settings->balance - $item->price]);

            DB::table('purchases')->insert([
                'item_id' => $id,
                'user_id' => $user_id,
                'price' => $item->price,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->route('item-view', ['id' => $id])->with('succes', 'CTI record successfully purchased');
        } else {
            //Fehlermeldung
            return redirect()->route('item-view', ['id' => $id])->with('error', 'Purchase failed: Not enough tokens');
        }
    }

    public function rate(Request $request, $id)
    {
        /*$attributes = request()->validate([
            //'name' => ['required', 'unique:items'],
            'name' => ['required'],
            //'excerpt' => ['max:100'],
            'description' => ['required','max:255'],
            //'choices-category' => ['required'],
            //'tags' => ['required'],
            'price' => ['required'],
            'status' => ['required'],
            'option' => ['required'],
            'upload' => ['required'],
        ]);

        $item = Item::create([
            'name' => $request->get('name'),
            //'excerpt' => $request->get('excerpt'),
            'description' => $request->get('description'),
            //'category_id' => $request->get('choices-category'),
            'category_id' => 1,
            //'date' => $request->get('date'),
            'price' => $request->get('price'),
            'owner' => 1,
            'status' => $request->get('status'),
            //'show_on_homepage' => $request->get('show_on_homepage'),
            'options' => $request->get('option')
        ]);

        //dd($item);

        //$item->tags()->attach($request->get('tags'));

        if($request->file('upload')) {
            $item->update([
                'download' => $request->file('upload')->store('/', 'items')
            ]);
        }

        return redirect()->route('item-offers')->with('succes', 'Item successfully saved');*/

        $user_id = auth()->user()->getAuthIdentifier();

        if($request->get('rating') == "") {
            //Fehlermeldung
            return redirect()->route('item-view', ['id' => $id])->with('error', 'Rating failed: Choose a rating');
        }

        DB::table('reviews')
            ->updateOrInsert(
                ['item_id' => $id, 'user_id' => $user_id],
                [
                    'review' => intval($request->get('rating')),
                    'description' => $request->get('rating-description'),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

        /*DB::table('reviews')
            ->where('item_id', $id)
            ->where('user_id', $user_id)
            ->updateOrInsert([
                    'review' => intval($request->get('rating')),
                    'description' => $request->get('rating-description')
                ]);*/

        return redirect()->route('item-view', ['id' => $id])->with('succes', 'CTI record successfully rated');
    }

    public function seal()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('laravel.items.seal', compact('categories', 'tags'));
    }

    public function balance()
    {
        $user_id = auth()->user()->getAuthIdentifier();

        $settings = DB::table('settings')
                    ->select('balance', 'subscription')
                    ->where('user_id', '=', $user_id)
                    ->first();

        $items = DB::table('items')
            ->select('id', 'name')
            ->where('owner', '=', $user_id)
            ->get()->toArray();

        /*$item_list = array();
        foreach($items as $item) {
            $item_list[] = array(
                'item_id' => $item->id
            );
        }*/

        $sales = array(
            'total' => 0,
            'list' => array(
                'subscription' => array(),
                'sell' => array(),
                'buy' => array(),
            )
        );

        $sales['list']['subscription'][] = array(
            'created_at' => '2023-06-01 00:00:00',
            'name' => 'Subscription June',
            'price' => 500,
            'type' => 1, //0: negative, 1: positive
        );
        $sales['list']['subscription'][] = array(
            'created_at' => '2023-07-01 00:00:00',
            'name' => 'Subscription July',
            'price' => 500,
            'type' => 1, //0: negative, 1: positive
        );
        $sales['list']['subscription'][] = array(
            'created_at' => '2023-08-01 00:00:00',
            'name' => 'Subscription August',
            'price' => 500,
            'type' => 1, //0: negative, 1: positive
        );
        $sales['list']['subscription'][] = array(
            'created_at' => '2023-09-01 00:00:00',
            'name' => 'Subscription September',
            'price' => 500,
            'type' => 1, //0: negative, 1: positive
        );
        $sales['list']['subscription'][] = array(
            'created_at' => '2023-10-01 00:00:00',
            'name' => 'Subscription October',
            'price' => 500,
            'type' => 1, //0: negative, 1: positive
        );
        $sales['list']['subscription'][] = array(
            'created_at' => '2023-11-01 00:00:00',
            'name' => 'Subscription November',
            'price' => 500,
            'type' => 1, //0: negative, 1: positive
        );

        foreach($items as $item) {
            $purchases_sell = DB::table('purchases')
                ->select('price', 'created_at')
                ->where('item_id', '=', $item->id)
                ->get();

            foreach($purchases_sell as $purchase) {
                $sales['total'] += $purchase->price;

                $sales['list']['sell'][] = array(
                    'created_at' => $purchase->created_at,
                    'name' => $item->name,
                    'price' => $purchase->price,
                    'type' => 1, //0: negative, 1: positive
                );
            }
        }

        $purchases_buy = DB::table('purchases')
            ->select('item_id', 'price', 'created_at')
            ->where('user_id', '=', $user_id)
            ->get();

        foreach($purchases_buy as $purchase) {

            $item_buy = DB::table('items')
                ->select('name')
                ->where('id', '=', $purchase->item_id)
                ->first();

            $sales['list']['buy'][] = array(
                'created_at' => $purchase->created_at,
                'name' => $item_buy->name,
                'price' => $purchase->price,
                'type' => 0, //0: negative, 1: positive
            );
        }

        $sales['list']['subscription'] = array_reverse($sales['list']['subscription']);
        $sales['list']['sell'] = array_reverse($sales['list']['sell']);
        $sales['list']['buy'] = array_reverse($sales['list']['buy']);

        //dd($sales);

        $categories = Category::all();
        $tags = Tag::all();
        return view('laravel.items.balance', compact('categories', 'tags', 'settings', 'sales'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('manage-items', User::class);
        $item = Item::find($id);

        $attributes = $request->validate([
            //'name' => ['required', 'unique:items'],
            'name' => ['required'],
            //'excerpt' => ['max:100'],
            'description' => ['required'],
            //'choices-category' => ['required'],
            //'tags' => ['required'],
            'price' => ['required'],
            'status' => ['required'],
            'option' => ['required'],
        ]);

        $item->update([
            'name' => $request->get('name'),
            //'excerpt' => $request->get('excerpt'),
            'description' => $request->get('description'),
            //'category_id' => $request->get('choices-category'),
            'category_id' => 1,
            //'date' => $request->get('date'),
            'price' => $request->get('price'),
            'owner' => 1,
            'status' => $request->get('status'),
            //'show_on_homepage' => $request->get('show_on_homepage'),
            'options' => $request->get('option')
        ]);

        return redirect()->route('item-offers')->with('succes', 'CTI record successfully updated');
    }

    public function destroy($id)
    {
        $this->authorize('manage-items', User::class);
        $item = Item::find($id);
        $item->tags()->detach();
        $item->delete();
        return redirect()->route('item-offers')->with('succes', 'CTI record successfully deleted');
    }
}
