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
 * Maps some properties to its internal representation from developer- and
 * company data in Monetization.
 *
 * Because it contains a reference to the parent organization profile
 * we extend its name converter.
 *
 * @see \Apigee\Edge\Api\Monetization\Entity\LegalEntity
 */
abstract class LegalEntityNameConvert extends OrganizationProfileNameConverter implements NameConverterInterface
{
    /**
     * @inheritdoc
     */
    protected function getExternalToLocalMapping(): array
    {
        $mapping = parent::getExternalToLocalMapping();
        $mapping += [
            'customAttributes' => 'attributes',
        ];

        return $mapping;
    }
}