<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClaim;

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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 */
class FHIRClaimInformation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Sequence of the information element which serves to provide a link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought which may influence the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $timingDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * For example, provides the reason for: the additional stay, or missing tooth or any other situation where a reason code is required in addition to the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Claim.Information';

    /**
     * Sequence of the information element which serves to provide a link.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence() {
        return $this->sequence;
    }

    /**
     * Sequence of the information element which serves to provide a link.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $sequence
     * @return $this
     */
    public function setSequence($sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought which may influence the adjudication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought which may influence the adjudication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getTimingDate() {
        return $this->timingDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $timingDate
     * @return $this
     */
    public function setTimingDate($timingDate) {
        $this->timingDate = $timingDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod() {
        return $this->timingPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod) {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString() {
        return $this->valueString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString) {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity() {
        return $this->valueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity) {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment() {
        return $this->valueAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment) {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference() {
        return $this->valueReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $valueReference
     * @return $this
     */
    public function setValueReference($valueReference) {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * For example, provides the reason for: the additional stay, or missing tooth or any other situation where a reason code is required in addition to the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * For example, provides the reason for: the additional stay, or missing tooth or any other situation where a reason code is required in addition to the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function setReason($reason) {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['timingDate'])) {
                $this->setTimingDate($data['timingDate']);
            }
            if (isset($data['timingPeriod'])) {
                $this->setTimingPeriod($data['timingPeriod']);
            }
            if (isset($data['valueString'])) {
                $this->setValueString($data['valueString']);
            }
            if (isset($data['valueQuantity'])) {
                $this->setValueQuantity($data['valueQuantity']);
            }
            if (isset($data['valueAttachment'])) {
                $this->setValueAttachment($data['valueAttachment']);
            }
            if (isset($data['valueReference'])) {
                $this->setValueReference($data['valueReference']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->sequence)) $json['sequence'] = $this->sequence;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->timingDate)) $json['timingDate'] = $this->timingDate;
        if (isset($this->timingPeriod)) $json['timingPeriod'] = $this->timingPeriod;
        if (isset($this->valueString)) $json['valueString'] = $this->valueString;
        if (isset($this->valueQuantity)) $json['valueQuantity'] = $this->valueQuantity;
        if (isset($this->valueAttachment)) $json['valueAttachment'] = $this->valueAttachment;
        if (isset($this->valueReference)) $json['valueReference'] = $this->valueReference;
        if (isset($this->reason)) $json['reason'] = $this->reason;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClaimInformation xmlns="http://hl7.org/fhir"></ClaimInformation>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->sequence)) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->timingDate)) $this->timingDate->xmlSerialize(true, $sxe->addChild('timingDate'));
        if (isset($this->timingPeriod)) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (isset($this->valueString)) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (isset($this->valueQuantity)) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (isset($this->valueAttachment)) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (isset($this->valueReference)) $this->valueReference->xmlSerialize(true, $sxe->addChild('valueReference'));
        if (isset($this->reason)) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}