<?php

namespace Freshdesk\Resources\Traits;


trait CreateWithOutboundMail
{
    /**
     * @param null $end string
     * @return string
     * @internal
     */
    abstract protected function endpoint($end = null);

    /**
     * @return \Freshdesk\Api
     * @internal
     */
    abstract protected function api();

    /**
     * Create a resource
     *
     * Create a resource with the supplied data
     *
     * @api
     * @param array $data The data
     * @return array|null
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     */
    public function createWithOutboundMail(array $data)
    {
        return $this->api()->request('POST', $this->endpoint("outbound_email"), $data);
    }
}