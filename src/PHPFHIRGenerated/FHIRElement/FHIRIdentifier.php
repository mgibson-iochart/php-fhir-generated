<?php namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * A technical identifier - identifies some entity uniquely and unambiguously.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRIdentifier extends FHIRElement implements \JsonSerializable
{
    /**
     * The purpose of this identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse
     */
    public $use = null;

    /**
     * A text string for the identifier that can be displayed to a human so they can recognize the identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * Establishes the namespace in which set of possible id values is unique.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * The portion of the identifier typically displayed to the user and which is unique within the context of the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $value = null;

    /**
     * Time period during which identifier is/was valid for use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Organization that issued/manages the identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $assigner = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Identifier';

    /**
     * The purpose of this identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * The purpose of this identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse $use
     * @return $this
     */
    public function setUse($use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * A text string for the identifier that can be displayed to a human so they can recognize the identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A text string for the identifier that can be displayed to a human so they can recognize the identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Establishes the namespace in which set of possible id values is unique.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Establishes the namespace in which set of possible id values is unique.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $system
     * @return $this
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * The portion of the identifier typically displayed to the user and which is unique within the context of the system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The portion of the identifier typically displayed to the user and which is unique within the context of the system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Time period during which identifier is/was valid for use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Time period during which identifier is/was valid for use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Organization that issued/manages the identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getAssigner()
    {
        return $this->assigner;
    }

    /**
     * Organization that issued/manages the identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $assigner
     * @return $this
     */
    public function setAssigner($assigner)
    {
        $this->assigner = $assigner;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->use) $json['use'] = $this->use;
        if (null !== $this->label) $json['label'] = $this->label;
        if (null !== $this->system) $json['system'] = $this->system;
        if (null !== $this->value) $json['value'] = $this->value;
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->assigner) $json['assigner'] = $this->assigner;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Identifier xmlns="http://hl7.org/fhir"></Identifier>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->use) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (null !== $this->label) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (null !== $this->system) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (null !== $this->value) $this->value->xmlSerialize(true, $sxe->addChild('value'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->assigner) $this->assigner->xmlSerialize(true, $sxe->addChild('assigner'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}