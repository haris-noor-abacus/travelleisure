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

namespace Apigee\Edge\Api\Monetization\Normalizer;

use Apigee\Edge\Api\Monetization\Entity\TermsAndConditionsInterface;
use Apigee\Edge\Api\Monetization\NameConverter\TermsAndConditionsNameConverter;
use Apigee\Edge\Api\Monetization\Utility\TimezoneFixerHelperTrait;
use Apigee\Edge\Exception\UninitializedPropertyException;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

class TermsAndConditionsNormalizer extends EntityNormalizer
{
    use TimezoneFixerHelperTrait;

    /**
     * TermsAndConditionsNormalizer constructor.
     *
     * @param ClassMetadataFactoryInterface|null $classMetadataFactory
     * @param NameConverterInterface|null $nameConverter
     * @param PropertyAccessorInterface|null $propertyAccessor
     * @param PropertyTypeExtractorInterface|null $propertyTypeExtractor
     */
    public function __construct(?ClassMetadataFactoryInterface $classMetadataFactory = null, ?NameConverterInterface $nameConverter = null, ?PropertyAccessorInterface $propertyAccessor = null, ?PropertyTypeExtractorInterface $propertyTypeExtractor = null)
    {
        $nameConverter = $nameConverter ?? new TermsAndConditionsNameConverter();
        parent::__construct($classMetadataFactory, $nameConverter, $propertyAccessor, $propertyTypeExtractor);
    }

    /**
     * {@inheritdoc}
     *
     * @psalm-suppress InvalidReturnType Returning an object here is required
     * for creating a valid Apigee Edge request.
     */
    public function normalize($object, $format = null, array $context = [])
    {
        /** @var object $normalized */
        $normalized = parent::normalize($object, $format, $context);

        // Fix the start- and end date of the terms and conditions
        // if the organization's timezone is different from the default
        // PHP timezone.
        /** @var TermsAndConditionsInterface $object */
        if (null === $object->getOrganization()) {
            throw new UninitializedPropertyException($object, 'organization', 'Apigee\Edge\Api\Monetization\Entity\OrganizationProfileInterface');
        }

        $this->fixTimeZoneOnNormalization($object, $normalized, $object->getOrganization()->getTimezone());

        return $normalized;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof TermsAndConditionsInterface;
    }
}
