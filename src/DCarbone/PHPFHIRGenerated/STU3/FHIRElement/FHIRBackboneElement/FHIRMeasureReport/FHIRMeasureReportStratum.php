<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 30th, 2019 21:22+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * The MeasureReport resource contains the results of evaluating a measure.
 *
 * Class FHIRMeasureReportStratum
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport
 */
class FHIRMeasureReportStratum extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATUM;
    const FIELD_MEASURE_SCORE = 'measureScore';
    const FIELD_MEASURE_SCORE_EXT = '_measureScore';
    const FIELD_POPULATION = 'population';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $measureScore = null;

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[]
     */
    protected $population = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a string. When defining stratifiers on
     * complex values, the value must be rendered such that the value for each stratum
     * within the stratifier is unique.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $value = null;

    /**
     * Validation map for fields in type MeasureReport.Stratum
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRMeasureReportStratum Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasureReportStratum::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MEASURE_SCORE])) {
            $ext = (isset($data[self::FIELD_MEASURE_SCORE_EXT]) && is_array($data[self::FIELD_MEASURE_SCORE_EXT]))
                ? $data[self::FIELD_MEASURE_SCORE_EXT]
                : null;
            if ($data[self::FIELD_MEASURE_SCORE] instanceof FHIRDecimal) {
                $this->setMeasureScore($data[self::FIELD_MEASURE_SCORE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MEASURE_SCORE])) {
                    $this->setMeasureScore(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_MEASURE_SCORE]] + $ext));
                } else if (is_array($data[self::FIELD_MEASURE_SCORE])) {
                    $this->setMeasureScore(new FHIRDecimal(array_merge($ext, $data[self::FIELD_MEASURE_SCORE])));
                }
            } else {
                $this->setMeasureScore(new FHIRDecimal($data[self::FIELD_MEASURE_SCORE]));
            }
        }
        if (isset($data[self::FIELD_POPULATION])) {
            if (is_array($data[self::FIELD_POPULATION])) {
                foreach($data[self::FIELD_POPULATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMeasureReportPopulation1) {
                        $this->addPopulation($v);
                    } else {
                        $this->addPopulation(new FHIRMeasureReportPopulation1($v));
                    }
                }
            } else if ($data[self::FIELD_POPULATION] instanceof FHIRMeasureReportPopulation1) {
                $this->addPopulation($data[self::FIELD_POPULATION]);
            } else {
                $this->addPopulation(new FHIRMeasureReportPopulation1($data[self::FIELD_POPULATION]));
            }
        }
        if (isset($data[self::FIELD_VALUE])) {
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT]))
                ? $data[self::FIELD_VALUE_EXT]
                : null;
            if ($data[self::FIELD_VALUE] instanceof FHIRString) {
                $this->setValue($data[self::FIELD_VALUE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE])) {
                    $this->setValue(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VALUE]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE])) {
                    $this->setValue(new FHIRString(array_merge($ext, $data[self::FIELD_VALUE])));
                }
            } else {
                $this->setValue(new FHIRString($data[self::FIELD_VALUE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<MeasureReportStratum{$xmlns}></MeasureReportStratum>";
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getMeasureScore()
    {
        return $this->measureScore;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $measureScore
     * @return static
     */
    public function setMeasureScore($measureScore = null)
    {
        if (null === $measureScore) {
            $this->measureScore = null;
            return $this;
        }
        if ($measureScore instanceof FHIRDecimal) {
            $this->measureScore = $measureScore;
            return $this;
        }
        $this->measureScore = new FHIRDecimal($measureScore);
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1 $population
     * @return static
     */
    public function addPopulation(FHIRMeasureReportPopulation1 $population = null)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[] $population
     * @return static
     */
    public function setPopulation(array $population = [])
    {
        $this->population = [];
        if ([] === $population) {
            return $this;
        }
        foreach($population as $v) {
            if ($v instanceof FHIRMeasureReportPopulation1) {
                $this->addPopulation($v);
            } else {
                $this->addPopulation(new FHIRMeasureReportPopulation1($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a string. When defining stratifiers on
     * complex values, the value must be rendered such that the value for each stratum
     * within the stratifier is unique.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a string. When defining stratifiers on
     * complex values, the value must be rendered such that the value for each stratum
     * within the stratifier is unique.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $value
     * @return static
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRString) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRString($value);
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMeasureReportStratum::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMeasureReportStratum::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMeasureReportStratum;
        } elseif (!is_object($type) || !($type instanceof FHIRMeasureReportStratum)) {
            throw new \RuntimeException(sprintf(
                'FHIRMeasureReportStratum::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->measureScore)) {
            $type->setMeasureScore(FHIRDecimal::xmlUnserialize($children->measureScore));
        }
        if (isset($attributes->measureScore)) {
            $pt = $type->getMeasureScore();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->measureScore);
            } else {
                $type->setMeasureScore((string)$attributes->measureScore);
            }
        }
        if (isset($children->population)) {
            foreach($children->population as $child) {
                $type->addPopulation(FHIRMeasureReportPopulation1::xmlUnserialize($child));
            }
        }
        if (isset($children->value)) {
            $type->setValue(FHIRString::xmlUnserialize($children->value));
        }
        if (isset($attributes->value)) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->value);
            } else {
                $type->setValue((string)$attributes->value);
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getMeasureScore())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEASURE_SCORE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POPULATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getValue())) {
            $sxe->addAttribute(self::FIELD_VALUE, (string)$v);
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getMeasureScore())) {
            $a[self::FIELD_MEASURE_SCORE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_MEASURE_SCORE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPopulation())) {
            $a[self::FIELD_POPULATION] = $vs;
        }
        if (null !== ($v = $this->getValue())) {
            $a[self::FIELD_VALUE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_VALUE_EXT] = $enc;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}