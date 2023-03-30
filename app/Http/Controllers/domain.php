<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class domain extends Controller
{
    public function search(Request $request)
    {
        # valida si el dominio web ya esta en uso
        $domain = $request->input('domain');
        $domain = str_replace('http://', '', $domain);
        $domain = str_replace('https://', '', $domain);
        $domain = str_replace('www.', '', $domain);
        $domain = explode('/', $domain);
        $domain = $domain[0];
        $domain = trim($domain);
        $domain = filter_var($domain, FILTER_SANITIZE_URL);
        $domain = filter_var($domain, FILTER_VALIDATE_URL);
        if (!$domain) {
            return redirect()->route('contact')->with('message', 'El dominio web no es valido');
        } else {
            $domain = str_replace('http://', '', $domain);
            $domain = str_replace('https://', '', $domain);
            $domain = str_replace('www.', '', $domain);
            $domain = explode('/', $domain);
            $domain = $domain[0];
            $domain = trim($domain);
            $domain = filter_var($domain, FILTER_SANITIZE_URL);
            $domain = filter_var($domain, FILTER_VALIDATE_URL);
            if (!$domain) {
                return redirect()->route('contact')->with('message', 'El dominio web no es valido');
            } else {
                $domain = str_replace('http://', '', $domain);
                $domain = str_replace('https://', '', $domain);
                $domain = str_replace('www.', '', $domain);
                $domain = explode('/', $domain);
                $domain = $domain[0];
                $domain = trim($domain);
                $domain = filter_var($domain, FILTER_SANITIZE_URL);
                $domain = filter_var($domain, FILTER_VALIDATE_URL);
                if (!$domain) {
                    return redirect()->route('contact')->with('message', 'El dominio web no es valido');
                } else {
                    $domain = str_replace('http://', '', $domain);
                    $domain = str_replace('https://', '', $domain);
                    $domain = str_replace('www.', '', $domain);
                    $domain = explode('/', $domain);
                    $domain = $domain[0];
                    $domain = trim($domain);
                    $domain = filter_var($domain, FILTER_SANITIZE_URL);
                    $domain = filter_var($domain, FILTER_VALIDATE_URL);
                    if (!$domain) {
                        return redirect()->route('contact')->with('message', 'El dominio web
no es valido');
                    }
                }
            }
        }
    }
}
