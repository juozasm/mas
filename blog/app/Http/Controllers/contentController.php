<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentController extends Controller
{
    public function home(){

        $content = "<p>Lorem ipinsum dolor sit amet, consectetur adipiscing elit. Nullam in euismod nibh, ut laoreet ligula. Curabitur hendrerit id dui a tempor. Morbi tincidunt auctor augue, in efficitur ante fermentum vel. Suspendisse commodo vestibulum venenatis. Phasellus volutpat posuere metus sit amet aliquam. Etiam eleifend sagittis nulla ut dictum. Quisque et maximus nulla. Vivamus luctus non erat a molestie. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <p>Vivamus tincidunt tellus nisl, at lobortis velit tempor quis. Aliquam quis cursus risus. Nulla facilisi. Ut vel tortor vitae magna tempor ullamcorper. Nunc fringilla purus eleifend purus suscipit eleifend. Donec vitae blandit augue. Praesent ut eleifend leo, eget pretium dui.</p>
            <p>Mauris non libero tcidunt, porttitor lorem nec, congue libero. Cras elit odio, dignissim et euismod nec, interdum quis enim. Quisque sit amet leo eget arcu sagittis volutpat et eget ligula. Integer molestie dolor id mi rhoncus viverra. Nunc justo odio, elementum at sagittis eget, pellentesque eu orci. Sed pharetra massa ut interdum pretium. Proin ullamcorper, dolor at congue sodales, ligula ex tristique metus, et vehicula nulla ligula non justo. Nam quis volutpat lacus. Duis tincidunt cursus diam, a efficitur arcu dictum vitae.</p>
            <p>Maecenas at auctor nisi. Aliquam imperdiet elit in nisl euismod feugiat. Proin non sollicitudin ipsum. Nam a ornare enim, vel tempus urna. Aenean sollicitudin fermentum justo, sit amet pellentesque velit varius a. Sed sodales condimentum nisi ac placerat. Curabitur dignissim, arcu ut convallis suscipit, felis ex lacinia nunc, vitae aliquam nunc nunc eu est. Sed maximus neque sit amet fringilla dapibus. Integer feugiat diam semper pretium ultricies.</p>";

        $data = array(
            'title' => "Home",
            'content' => $content
        );

        return view('home', $data);
    }

    public function about(){

        $content = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in euismod nibh, ut laoreet ligula. Curabitur hendrerit id dui a tempor. Morbi tincidunt auctor augue, in efficitur ante fermentum vel. Suspendisse commodo vestibulum venenatis. Phasellus volutpat posuere metus sit amet aliquam. Etiam eleifend sagittis nulla ut dictum. Quisque et maximus nulla. Vivamus luctus non erat a molestie. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <p>Vivamus tincidunt tellus nisl, at lobortis velit tempor quis. Aliquam quis cursus risus. Nulla facilisi. Ut vel tortor vitae magna tempor ullamcorper. Nunc fringilla purus eleifend purus suscipit eleifend. Donec vitae blandit augue. Praesent ut eleifend leo, eget pretium dui.</p>
            <p>Mauris non libero tincidunt, porttitor lorem nec, congue libero. Cras elit odio, dignissim et euismod nec, interdum quis enim. Quisque sit amet leo eget arcu sagittis volutpat et eget ligula. Integer molestie dolor id mi rhoncus viverra. Nunc justo odio, elementum at sagittis eget, pellentesque eu orci. Sed pharetra massa ut interdum pretium. Proin ullamcorper, dolor at congue sodales, ligula ex tristique metus, et vehicula nulla ligula non justo. Nam quis volutpat lacus. Duis tincidunt cursus diam, a efficitur arcu dictum vitae.</p>
            <p>Maecenas at auctor nisi. Aliquam imperdiet elit in nisl euismod feugiat. Proin non sollicitudin ipsum. Nam a ornare enim, vel tempus urna. Aenean sollicitudin fermentum justo, sit amet pellentesque velit varius a. Sed sodales condimentum nisi ac placerat. Curabitur dignissim, arcu ut convallis suscipit, felis ex lacinia nunc, vitae aliquam nunc nunc eu est. Sed maximus neque sit amet fringilla dapibus. Integer feugiat diam semper pretium ultricies.</p>";

        $data = array(
            'title' => "About us",
            'content' => $content
        );

        return view('information', $data);
    }

    public function admin()
    {
        return view('admin');
    }
}
