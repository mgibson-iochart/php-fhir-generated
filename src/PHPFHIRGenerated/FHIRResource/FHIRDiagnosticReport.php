<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * The findings and interpretation of diagnostic  tests performed on patients, groups of patients, devices, and locations, and/or specimens derived from these. The report includes clinical context such as requesting and provider information, and some mix of atomic results, images, textual and coded interpretation, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDiagnosticReport extends FHIRResource implements \JsonSerializable
{
    /**
     * A code or name that describes this diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $name = null;

    /**
     * The status of the diagnostic report as a whole.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus
     */
    public $status = null;

    /**
     * The date and/or time that this version of the report was released from the source diagnostic service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $performer = null;

    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Details concerning a test requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $requestDetail = array();

    /**
     * The section of the diagnostic service that performs the examination e.g. biochemistry, hematology, MRI.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceCategory = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $diagnosticDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $diagnosticPeriod = null;

    /**
     * Details about the specimens on which this Disagnostic report is based.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $specimen = array();

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $result = array();

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $imagingStudy = array();

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    public $image = array();

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $conclusion = null;

    /**
     * Codes for the conclusion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $codedDiagnosis = array();

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public $presentedForm = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DiagnosticReport';

    /**
     * A code or name that describes this diagnostic report.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A code or name that describes this diagnostic report.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of the diagnostic report as a whole.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the diagnostic report as a whole.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The date and/or time that this version of the report was released from the source diagnostic service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * The date and/or time that this version of the report was released from the source diagnostic service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $issued
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $performer
     * @return $this
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Details concerning a test requested.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getRequestDetail()
    {
        return $this->requestDetail;
    }

    /**
     * Details concerning a test requested.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $requestDetail
     * @return $this
     */
    public function addRequestDetail($requestDetail)
    {
        $this->requestDetail[] = $requestDetail;
        return $this;
    }

    /**
     * The section of the diagnostic service that performs the examination e.g. biochemistry, hematology, MRI.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * The section of the diagnostic service that performs the examination e.g. biochemistry, hematology, MRI.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDiagnosticDateTime()
    {
        return $this->diagnosticDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $diagnosticDateTime
     * @return $this
     */
    public function setDiagnosticDateTime($diagnosticDateTime)
    {
        $this->diagnosticDateTime = $diagnosticDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDiagnosticPeriod()
    {
        return $this->diagnosticPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $diagnosticPeriod
     * @return $this
     */
    public function setDiagnosticPeriod($diagnosticPeriod)
    {
        $this->diagnosticPeriod = $diagnosticPeriod;
        return $this;
    }

    /**
     * Details about the specimens on which this Disagnostic report is based.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Details about the specimens on which this Disagnostic report is based.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $specimen
     * @return $this
     */
    public function addSpecimen($specimen)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $result
     * @return $this
     */
    public function addResult($result)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $imagingStudy
     * @return $this
     */
    public function addImagingStudy($imagingStudy)
    {
        $this->imagingStudy[] = $imagingStudy;
        return $this;
    }

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage $image
     * @return $this
     */
    public function addImage($image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $conclusion
     * @return $this
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;
        return $this;
    }

    /**
     * Codes for the conclusion.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCodedDiagnosis()
    {
        return $this->codedDiagnosis;
    }

    /**
     * Codes for the conclusion.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $codedDiagnosis
     * @return $this
     */
    public function addCodedDiagnosis($codedDiagnosis)
    {
        $this->codedDiagnosis[] = $codedDiagnosis;
        return $this;
    }

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public function getPresentedForm()
    {
        return $this->presentedForm;
    }

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $presentedForm
     * @return $this
     */
    public function addPresentedForm($presentedForm)
    {
        $this->presentedForm[] = $presentedForm;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->issued) $json['issued'] = $this->issued;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->performer) $json['performer'] = $this->performer;
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (0 < count($this->requestDetail)) {
            $json['requestDetail'] = [];
            foreach($this->requestDetail as $requestDetail) {
                $json['requestDetail'][] = $requestDetail;
            }
        }
        if (null !== $this->serviceCategory) $json['serviceCategory'] = $this->serviceCategory;
        if (null !== $this->diagnosticDateTime) $json['diagnosticDateTime'] = $this->diagnosticDateTime;
        if (null !== $this->diagnosticPeriod) $json['diagnosticPeriod'] = $this->diagnosticPeriod;
        if (0 < count($this->specimen)) {
            $json['specimen'] = [];
            foreach($this->specimen as $specimen) {
                $json['specimen'][] = $specimen;
            }
        }
        if (0 < count($this->result)) {
            $json['result'] = [];
            foreach($this->result as $result) {
                $json['result'][] = $result;
            }
        }
        if (0 < count($this->imagingStudy)) {
            $json['imagingStudy'] = [];
            foreach($this->imagingStudy as $imagingStudy) {
                $json['imagingStudy'][] = $imagingStudy;
            }
        }
        if (0 < count($this->image)) {
            $json['image'] = [];
            foreach($this->image as $image) {
                $json['image'][] = $image;
            }
        }
        if (null !== $this->conclusion) $json['conclusion'] = $this->conclusion;
        if (0 < count($this->codedDiagnosis)) {
            $json['codedDiagnosis'] = [];
            foreach($this->codedDiagnosis as $codedDiagnosis) {
                $json['codedDiagnosis'][] = $codedDiagnosis;
            }
        }
        if (0 < count($this->presentedForm)) {
            $json['presentedForm'] = [];
            foreach($this->presentedForm as $presentedForm) {
                $json['presentedForm'][] = $presentedForm;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DiagnosticReport xmlns="http://hl7.org/fhir"></DiagnosticReport>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->issued) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->performer) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (0 < count($this->requestDetail)) {
            foreach($this->requestDetail as $requestDetail) {
                $requestDetail->xmlSerialize(true, $sxe->addChild('requestDetail'));
            }
        }
        if (null !== $this->serviceCategory) $this->serviceCategory->xmlSerialize(true, $sxe->addChild('serviceCategory'));
        if (null !== $this->diagnosticDateTime) $this->diagnosticDateTime->xmlSerialize(true, $sxe->addChild('diagnosticDateTime'));
        if (null !== $this->diagnosticPeriod) $this->diagnosticPeriod->xmlSerialize(true, $sxe->addChild('diagnosticPeriod'));
        if (0 < count($this->specimen)) {
            foreach($this->specimen as $specimen) {
                $specimen->xmlSerialize(true, $sxe->addChild('specimen'));
            }
        }
        if (0 < count($this->result)) {
            foreach($this->result as $result) {
                $result->xmlSerialize(true, $sxe->addChild('result'));
            }
        }
        if (0 < count($this->imagingStudy)) {
            foreach($this->imagingStudy as $imagingStudy) {
                $imagingStudy->xmlSerialize(true, $sxe->addChild('imagingStudy'));
            }
        }
        if (0 < count($this->image)) {
            foreach($this->image as $image) {
                $image->xmlSerialize(true, $sxe->addChild('image'));
            }
        }
        if (null !== $this->conclusion) $this->conclusion->xmlSerialize(true, $sxe->addChild('conclusion'));
        if (0 < count($this->codedDiagnosis)) {
            foreach($this->codedDiagnosis as $codedDiagnosis) {
                $codedDiagnosis->xmlSerialize(true, $sxe->addChild('codedDiagnosis'));
            }
        }
        if (0 < count($this->presentedForm)) {
            foreach($this->presentedForm as $presentedForm) {
                $presentedForm->xmlSerialize(true, $sxe->addChild('presentedForm'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}