<?php

/*
 * Copyright 2023 Google LLC
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

namespace Apigee\Edge\Api\ApigeeX\Normalizer;

use Apigee\Edge\Api\ApigeeX\Structure\AppGroupMembership;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AppGroupMembershipNormalizer implements NormalizerInterface
{
    /**
     * {@inheritdoc}
     *
     * @psalm-suppress InvalidReturnType Returning an object here is required
     * for creating a valid Apigee Edge request.
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalized = [];

        /** @var AppGroupMembership $object */
        foreach ($object->getMembers() as $member => $role) {
            $normalized[] = ['developer' => $member, 'roles' => $role];
        }

        return $normalized;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof AppGroupMembership;
    }
}
