<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use Illuminate\Http\Request;


class ProductController extends Controller
{

  public function index()
  {
    $products = [
      [
        'name' => 'Toshiba DT01ACA050 500 GB 3.5-Inch Internal Hard Drive 500',
        'manufacturer' => 'Toshiba',
        'price' => '3300',
        'description' => "The DT01ACA series is Toshiba's first 3.5-inch hard drive for use in power-friendly consumer and commercial desktop computers. The 7,200 RPM drive series is engineered for high performance and low power for cooler operation. The DT01ACA Desktop HDDs feature 1 terabyte-per-platter technology in capacities ranging from 500GB to 3TB (1, 2 or 3 platters). With 64MB cache buffer (1.5TB, 2TB, and 3TB models) the DT01ACA drives are designed for faster data processing. The 3.5-inch DT01ACA drives include Advanced Sector Format technology, which utilizes the industry standard 4K byte-per-sector configuration and improved error-correcting code functionality to enhance data integrity while making more efficient use of the storage surface area."
      ],
      [
        'name' => 'Logitech M525 Wireless Mouse',
        'manufacturer' => 'Logitec',
        'price' => '2100',
        'description' => 'Control freaks, your mouse is ready. With micro-precise scrolling, ultra-smooth cursor control and super-long-and-reliable battery power, this compact wireless mouse screams control—and personal style in your choice of sweet color combinations.'
      ],
      [
        'name' => 'Sony WH-1000XM4 Wireless Headphones',
        'manufacturer' => 'Sony',
        'price' => '15400',
        'description' => 'About this item
          Industry-leading noise canceling with Dual Noise Sensor technology
          Next-level music with Edge-AI, co-developed with Sony Music Studios Tokyo
          Up to 30-hour battery life with quick charging (10 min charge for 5 hours of playback)
          Touch Sensor controls to pause play skip tracks, control volume, activate your voice assistant, and answer phone calls
          Speak-to-chat technology automatically reduces volume during conversations
          Superior call quality with precise voice pickup
          Wearing detection pauses playback when headphones are removed
          Seamless multiple-device pairing
          Adaptive Sound Control provides a personalized listening experience
          Updated design relieves pressure for long-lasting comfort'
      ]

    ];
    return view('products.index', ['products' => $products]);
  }

  public function show($product_id)
  {
    $products = [
      [
        'name' => 'Toshiba DT01ACA050 500 GB 3.5-Inch Internal Hard Drive 500',
        'manufacturer' => 'Toshiba',
        'price' => '3300',
        'description' => "The DT01ACA series is Toshiba's first 3.5-inch hard drive for use in power-friendly consumer and commercial desktop computers. The 7,200 RPM drive series is engineered for high performance and low power for cooler operation. The DT01ACA Desktop HDDs feature 1 terabyte-per-platter technology in capacities ranging from 500GB to 3TB (1, 2 or 3 platters). With 64MB cache buffer (1.5TB, 2TB, and 3TB models) the DT01ACA drives are designed for faster data processing. The 3.5-inch DT01ACA drives include Advanced Sector Format technology, which utilizes the industry standard 4K byte-per-sector configuration and improved error-correcting code functionality to enhance data integrity while making more efficient use of the storage surface area."
      ],
      [
        'name' => 'Logitech M525 Wireless Mouse',
        'manufacturer' => 'Logitec',
        'price' => '2100',
        'description' => 'Control freaks, your mouse is ready. With micro-precise scrolling, ultra-smooth cursor control and super-long-and-reliable battery power, this compact wireless mouse screams control—and personal style in your choice of sweet color combinations.'
      ],
      [
        'name' => 'Sony WH-1000XM4 Wireless Headphones',
        'manufacturer' => 'Sony',
        'price' => '15400',
        'description' => 'About this item
          Industry-leading noise canceling with Dual Noise Sensor technology
          Next-level music with Edge-AI, co-developed with Sony Music Studios Tokyo
          Up to 30-hour battery life with quick charging (10 min charge for 5 hours of playback)
          Touch Sensor controls to pause play skip tracks, control volume, activate your voice assistant, and answer phone calls
          Speak-to-chat technology automatically reduces volume during conversations
          Superior call quality with precise voice pickup
          Wearing detection pauses playback when headphones are removed
          Seamless multiple-device pairing
          Adaptive Sound Control provides a personalized listening experience
          Updated design relieves pressure for long-lasting comfort'
      ]

    ];
    $product = $products[$product_id];
    return view('products.show', ['product' => $product]);
  }

  public function create()
  {
    return view('products.create');
  }

  public function store(ProductCreateRequest $request)
  {
    $name = $request->post('name');
    $manufacturer = $request->post('manufacturer');
    $price = $request->post('price');
    $description = $request->post('description');
  }

  public function edit()
  {
    return view('products.edit');
  }

  public function delete()
  {
    return view('products.delete');
  }

}