<?php

namespace Akaunting\Firewall\Traits;

use Akaunting\Firewall\Models\Log;
use Symfony\Component\HttpFoundation\IpUtils;

trait Helper
{
    public function isEnabled($middleware = null)
    {
        $middleware = $middleware ?? $this->middleware;

        return config('firewall.middleware.' . $middleware . '.enabled', config('firewall.enabled'));
    }

    public function isDisabled($middleware = null)
    {
        return !$this->isEnabled($middleware);
    }

    public function isWhitelist()
    {
        return IpUtils::checkIp($this->ip(), config('firewall.whitelist'));
    }

    public function isMethod($middleware = null)
    {
        $middleware = $middleware ?? $this->middleware;

        if (!$methods = config('firewall.middleware.' . $middleware . '.methods')) {
            return false;
        }

        if (in_array('all', $methods)) {
            return true;
        }

        return in_array(strtolower($this->request->method()), $methods);
    }

    public function isRoute($middleware = null)
    {
        $middleware = $middleware ?? $this->middleware;

        if (!$routes = config('firewall.middleware.' . $middleware . '.routes')) {
            return false;
        }

        foreach ($routes['except'] as $ex) {
            if (!$this->request->is($ex)) {
                continue;
            }

            return true;
        }

        foreach ($routes['only'] as $on) {
            if ($this->request->is($on)) {
                continue;
            }

            return true;
        }

        return false;
    }

    public function isInput($name, $middleware = null)
    {
        $middleware = $middleware ?? $this->middleware;

        if (!$inputs = config('firewall.middleware.' . $middleware . '.inputs')) {
            return true;
        }

        if (!empty($inputs['only']) && !in_array((string) $name, (array) $inputs['only'])) {
            return false;
        }

        return !in_array((string) $name, (array) $inputs['except']);
    }

    public function log($middleware = null, $user_id = null, $level = 'medium')
    {
        $middleware = $middleware ?? $this->middleware;
        $user_id = $user_id ?? $this->user_id;

        return Log::create([
            'ip' => $this->ip(),
            'level' => $level,
            'middleware' => $middleware,
            'user_id' => $user_id,
            'url' => $this->request->fullUrl(),
            'referrer' => $this->request->server('HTTP_REFERER') ?: 'NULL',
            'request' => urldecode(http_build_query($this->request->input())),
        ]);
    }

    public function ip()
    {
        if ($cf_ip = $this->request->header('CF_CONNECTING_IP')) {
            $ip = $cf_ip;
        } else {
            $ip = $this->request->ip();
        }

        return $ip;
    }
}
