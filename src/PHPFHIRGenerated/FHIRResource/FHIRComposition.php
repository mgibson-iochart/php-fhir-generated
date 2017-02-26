<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * A set of healthcare-related information that is assembled together into a single logical document that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRComposition extends FHIRResource implements \JsonSerializable
{
    /**
     * Logical Identifier for the composition, assigned when created. This identifier stays constant as the composition is changed over time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A categorization for the type of the composition. This may be implied by or derived from the code specified in the Composition Type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $class = null;

    /**
     * Official human-readable label for the composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public $status = null;

    /**
     * The code specifying the level of confidentiality of the Composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $confidentiality = null;

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (I.e. machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * Identifies who is responsible for the information in the composition.  (Not necessarily who typed it in.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $author = array();

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionAttester[]
     */
    public $attester = array();

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $custodian = null;

    /**
     * The main event/act/item, such as a colonoscopy or an appendectomy, being documented.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionEvent
     */
    public $event = null;

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $encounter = null;

    /**
     * The root of the sections that make up the composition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection[]
     */
    public $section = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Composition';

    /**
     * Logical Identifier for the composition, assigned when created. This identifier stays constant as the composition is changed over time.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Logical Identifier for the composition, assigned when created. This identifier stays constant as the composition is changed over time.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A categorization for the type of the composition. This may be implied by or derived from the code specified in the Composition Type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A categorization for the type of the composition. This may be implied by or derived from the code specified in the Composition Type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Official human-readable label for the composition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Official human-readable label for the composition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The code specifying the level of confidentiality of the Composition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * The code specifying the level of confidentiality of the Composition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $confidentiality
     * @return $this
     */
    public function setConfidentiality($confidentiality)
    {
        $this->confidentiality = $confidentiality;
        return $this;
    }

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (I.e. machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (I.e. machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Identifies who is responsible for the information in the composition.  (Not necessarily who typed it in.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Identifies who is responsible for the information in the composition.  (Not necessarily who typed it in.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $author
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionAttester[]
     */
    public function getAttester()
    {
        return $this->attester;
    }

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionAttester $attester
     * @return $this
     */
    public function addAttester($attester)
    {
        $this->attester[] = $attester;
        return $this;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $custodian
     * @return $this
     */
    public function setCustodian($custodian)
    {
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * The main event/act/item, such as a colonoscopy or an appendectomy, being documented.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionEvent
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * The main event/act/item, such as a colonoscopy or an appendectomy, being documented.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionEvent $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The root of the sections that make up the composition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * The root of the sections that make up the composition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection $section
     * @return $this
     */
    public function addSection($section)
    {
        $this->section[] = $section;
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
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->class) $json['class'] = json_encode($this->class);
        if (null !== $this->title) $json['title'] = json_encode($this->title);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->confidentiality) $json['confidentiality'] = json_encode($this->confidentiality);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                $json['author'][] = json_encode($author);
            }
        }
        if (0 < count($this->attester)) {
            $json['attester'] = [];
            foreach($this->attester as $attester) {
                $json['attester'][] = json_encode($attester);
            }
        }
        if (null !== $this->custodian) $json['custodian'] = json_encode($this->custodian);
        if (null !== $this->event) $json['event'] = json_encode($this->event);
        if (null !== $this->encounter) $json['encounter'] = json_encode($this->encounter);
        if (0 < count($this->section)) {
            $json['section'] = [];
            foreach($this->section as $section) {
                $json['section'][] = json_encode($section);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Composition xmlns="http://hl7.org/fhir"></Composition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->class) $this->class->xmlSerialize(true, $sxe->addChild('class'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->confidentiality) $this->confidentiality->xmlSerialize(true, $sxe->addChild('confidentiality'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (0 < count($this->attester)) {
            foreach($this->attester as $attester) {
                $attester->xmlSerialize(true, $sxe->addChild('attester'));
            }
        }
        if (null !== $this->custodian) $this->custodian->xmlSerialize(true, $sxe->addChild('custodian'));
        if (null !== $this->event) $this->event->xmlSerialize(true, $sxe->addChild('event'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (0 < count($this->section)) {
            foreach($this->section as $section) {
                $section->xmlSerialize(true, $sxe->addChild('section'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}