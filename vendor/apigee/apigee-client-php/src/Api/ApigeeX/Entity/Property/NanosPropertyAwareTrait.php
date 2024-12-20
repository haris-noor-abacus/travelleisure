<?php

/*
 * Copyright 2021 Google LLC
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

namespace Apigee\Edge\Api\ApigeeX\Entity\Property;

/**
 * Trait NanosPropertyAwareTrait.
 *
 * @see NanosPropertyInterface
 */
trait NanosPropertyAwareTrait
{
    /** @var float|null */
    protected $nanos;

    /**
     * {@inheritdoc}
     */
    public function getNanos(): ?float
    {
        $nanos = $this->nanos ?? 0;

        return $nanos * pow(10, -9);
    }

    /**
     * {@inheritdoc}
     */
    public function setNanos(int $nanos): void
    {
        $this->nanos = $nanos;
    }
}
