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

namespace Apigee\Edge\Api\Monetization\NameConverter;

use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

/**
 * Converts "developer" to "company" on those accepted rate plans that
 * belongs to a company. This is only used in the
 * CompanyAcceptedRatePlanController.
 *
 * @see \Apigee\Edge\Api\Monetization\Entity\CompanyAcceptedRatePlan
 */
class CompanyAcceptedRatePlanNameConverter extends NameConverterBase implements NameConverterInterface
{
    /**
     * {@inheritdoc}
     */
    protected function getExternalToLocalMapping(): array
    {
        return [
            'developer' => 'company',
        ];
    }
}
