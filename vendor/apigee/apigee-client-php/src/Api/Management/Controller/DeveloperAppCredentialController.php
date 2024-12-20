<?php

/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apigee\Edge\Api\Management\Controller;

use Apigee\Edge\ClientInterface;
use Apigee\Edge\Serializer\EntitySerializerInterface;
use Psr\Http\Message\UriInterface;

/**
 * Class DeveloperAppCredentialController.
 */
class DeveloperAppCredentialController extends AppCredentialController implements DeveloperAppCredentialControllerInterface
{
    /** @var string Developer email or id. */
    protected $developerId;

    /** @var string App name. */
    protected $appName;

    /**
     * DeveloperAppCredentialController constructor.
     *
     * @param string $organization
     * @param string $developerId
     * @param string $appName
     * @param ClientInterface $client
     * @param EntitySerializerInterface|null $entitySerializer
     */
    public function __construct(
        string $organization,
        string $developerId,
        string $appName,
        ClientInterface $client,
        ?EntitySerializerInterface $entitySerializer = null,
    ) {
        $this->developerId = $developerId;
        parent::__construct($organization, $appName, $client, $entitySerializer);
    }

    /**
     * {@inheritdoc}
     */
    protected function getBaseEndpointUri(): UriInterface
    {
        $developerId = rawurlencode($this->developerId);
        $appName = rawurlencode($this->appName);

        return $this->client->getUriFactory()->createUri("/organizations/{$this->organization}/developers/{$developerId}/apps/{$appName}");
    }

    /**
     * {@inheritdoc}
     */
    protected function getEntityEndpointUri(string $entityId): UriInterface
    {
        return $this->getBaseEndpointUri()->withPath("{$this->getBaseEndpointUri()}/keys/{$entityId}");
    }
}
