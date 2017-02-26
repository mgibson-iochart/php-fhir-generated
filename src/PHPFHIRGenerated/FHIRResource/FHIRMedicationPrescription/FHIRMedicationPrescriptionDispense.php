<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicationPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * An order for both supply of the medication and the instructions for administration of the medicine to a patient.
 */
class FHIRMedicationPrescriptionDispense extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifies the medication that is to be dispensed.  This may be a more specifically defined than the medicationPrescription.medication . This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $medication = null;

    /**
     * Design Comments: This indicates the validity period of a prescription (stale dating the Prescription) 
It reflects the prescriber perspective for the validity of the prescription. Dispenses must not be made against the prescription outside of this period. The lower-bound of the Dispensing Window signifies the earliest date that the prescription can be filled for the first time. If an upper-bound is not specified then the Prescription is open-ended or will default to a stale-date based on regulations. 
Rationale: Indicates when the Prescription becomes valid, and when it ceases to be a dispensable Prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $validityPeriod = null;

    /**
     * An integer indicating the number of repeats of the Dispense. 
UsageNotes: For example, the number of times the prescribed quantity is to be supplied including the initial standard fill.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $numberOfRepeatsAllowed = null;

    /**
     * The amount that is to be dispensed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last. 
In some situations, this attribute may be used instead of quantity to identify the amount supplied by how long it is expected to last, rather than the physical quantity issued, e.g. 90 days supply of medication (based on an ordered dosage) When possible, it is always better to specify quantity, as this tends to be more precise. expectedSupplyDuration will always be an estimate that can be influenced by external factors.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $expectedSupplyDuration = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationPrescription.Dispense';

    /**
     * Identifies the medication that is to be dispensed.  This may be a more specifically defined than the medicationPrescription.medication . This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Identifies the medication that is to be dispensed.  This may be a more specifically defined than the medicationPrescription.medication . This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $medication
     * @return $this
     */
    public function setMedication($medication)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * Design Comments: This indicates the validity period of a prescription (stale dating the Prescription) 
It reflects the prescriber perspective for the validity of the prescription. Dispenses must not be made against the prescription outside of this period. The lower-bound of the Dispensing Window signifies the earliest date that the prescription can be filled for the first time. If an upper-bound is not specified then the Prescription is open-ended or will default to a stale-date based on regulations. 
Rationale: Indicates when the Prescription becomes valid, and when it ceases to be a dispensable Prescription.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Design Comments: This indicates the validity period of a prescription (stale dating the Prescription) 
It reflects the prescriber perspective for the validity of the prescription. Dispenses must not be made against the prescription outside of this period. The lower-bound of the Dispensing Window signifies the earliest date that the prescription can be filled for the first time. If an upper-bound is not specified then the Prescription is open-ended or will default to a stale-date based on regulations. 
Rationale: Indicates when the Prescription becomes valid, and when it ceases to be a dispensable Prescription.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $validityPeriod
     * @return $this
     */
    public function setValidityPeriod($validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * An integer indicating the number of repeats of the Dispense. 
UsageNotes: For example, the number of times the prescribed quantity is to be supplied including the initial standard fill.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumberOfRepeatsAllowed()
    {
        return $this->numberOfRepeatsAllowed;
    }

    /**
     * An integer indicating the number of repeats of the Dispense. 
UsageNotes: For example, the number of times the prescribed quantity is to be supplied including the initial standard fill.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $numberOfRepeatsAllowed
     * @return $this
     */
    public function setNumberOfRepeatsAllowed($numberOfRepeatsAllowed)
    {
        $this->numberOfRepeatsAllowed = $numberOfRepeatsAllowed;
        return $this;
    }

    /**
     * The amount that is to be dispensed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The amount that is to be dispensed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last. 
In some situations, this attribute may be used instead of quantity to identify the amount supplied by how long it is expected to last, rather than the physical quantity issued, e.g. 90 days supply of medication (based on an ordered dosage) When possible, it is always better to specify quantity, as this tends to be more precise. expectedSupplyDuration will always be an estimate that can be influenced by external factors.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getExpectedSupplyDuration()
    {
        return $this->expectedSupplyDuration;
    }

    /**
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last. 
In some situations, this attribute may be used instead of quantity to identify the amount supplied by how long it is expected to last, rather than the physical quantity issued, e.g. 90 days supply of medication (based on an ordered dosage) When possible, it is always better to specify quantity, as this tends to be more precise. expectedSupplyDuration will always be an estimate that can be influenced by external factors.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $expectedSupplyDuration
     * @return $this
     */
    public function setExpectedSupplyDuration($expectedSupplyDuration)
    {
        $this->expectedSupplyDuration = $expectedSupplyDuration;
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
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->medication) $json['medication'] = json_encode($this->medication);
        if (null !== $this->validityPeriod) $json['validityPeriod'] = json_encode($this->validityPeriod);
        if (null !== $this->numberOfRepeatsAllowed) $json['numberOfRepeatsAllowed'] = json_encode($this->numberOfRepeatsAllowed);
        if (null !== $this->quantity) $json['quantity'] = json_encode($this->quantity);
        if (null !== $this->expectedSupplyDuration) $json['expectedSupplyDuration'] = json_encode($this->expectedSupplyDuration);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationPrescriptionDispense xmlns="http://hl7.org/fhir"></MedicationPrescriptionDispense>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->medication) $this->medication->xmlSerialize(true, $sxe->addChild('medication'));
        if (null !== $this->validityPeriod) $this->validityPeriod->xmlSerialize(true, $sxe->addChild('validityPeriod'));
        if (null !== $this->numberOfRepeatsAllowed) $this->numberOfRepeatsAllowed->xmlSerialize(true, $sxe->addChild('numberOfRepeatsAllowed'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->expectedSupplyDuration) $this->expectedSupplyDuration->xmlSerialize(true, $sxe->addChild('expectedSupplyDuration'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}