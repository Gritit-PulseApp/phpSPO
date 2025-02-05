<?php

/**
 * Generated 2020-04-22T21:18:30+00:00 16.0.20008.12009
 */
namespace Office365\SharePoint;

use Office365\Runtime\Paths\EntityResourcePath;
use Office365\Runtime\ResourcePath;
/**
 * Specifies 
 * a content 
 * type.The SchemaXmlWithResourceTokens property is not included in 
 * the default 
 * scalar property set for this type.
 */
class ContentType extends Entity
{

    function setProperty($name, $value, $persistChanges = true)
    {
        if ($name == "Id") {
            $value = $value['StringValue'];
        } else {
            if ($name == "StringId") {
                $this->resourcePath = new EntityResourcePath($value, $this->getParentCollection()->getResourcePath());
            }
        }
        return parent::setProperty($name, $value, $persistChanges);
    }
    /**
     * Specifies 
     * the description of the content type.It MUST 
     * NOT be NULL. 
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }

    /**
     * Specifies
     * the description of the content type.It MUST
     * NOT be NULL.
     * @return ContentType
     * @var string
     */
    public function setDescription($value)
    {
        return $this->setProperty("Description", $value, true);
    }
    /**
     * Specifies 
     * the name of a custom display form 
     * template to use for list items that have 
     * been assigned the content type.
     * @return string
     */
    public function getDisplayFormTemplateName()
    {
        if (!$this->isPropertyAvailable("DisplayFormTemplateName")) {
            return null;
        }
        return $this->getProperty("DisplayFormTemplateName");
    }
    /**
     * Specifies 
     * the name of a custom display form 
     * template to use for list items that have 
     * been assigned the content type.
     * @var string
     */
    public function setDisplayFormTemplateName($value)
    {
        $this->setProperty("DisplayFormTemplateName", $value, true);
    }
    /**
     * Specifies 
     * the URL 
     * of a custom display form to use 
     * for list 
     * items that have been assigned the content type.
     * @return string
     */
    public function getDisplayFormUrl()
    {
        if (!$this->isPropertyAvailable("DisplayFormUrl")) {
            return null;
        }
        return $this->getProperty("DisplayFormUrl");
    }
    /**
     * Specifies 
     * the URL 
     * of a custom display form to use 
     * for list 
     * items that have been assigned the content type.
     * @var string
     */
    public function setDisplayFormUrl($value)
    {
        $this->setProperty("DisplayFormUrl", $value, true);
    }
    /**
     * Specifies 
     * the file path to the document template (1) 
     * used for a new list item that has 
     * been assigned the content type.It MUST 
     * NOT be NULL. It MUST be either an absolute URL, a server-relative 
     * URL, or a URL relative to the content type resource folder for 
     * the content typeExceptions: Error CodeError Type NameCondition-2130575338Microsoft.SharePoint.SPExceptionList is not found 
     *   or has been deleted 
     * @return string
     */
    public function getDocumentTemplate()
    {
        if (!$this->isPropertyAvailable("DocumentTemplate")) {
            return null;
        }
        return $this->getProperty("DocumentTemplate");
    }
    /**
     * Specifies 
     * the file path to the document template (1) 
     * used for a new list item that has 
     * been assigned the content type.It MUST 
     * NOT be NULL. It MUST be either an absolute URL, a server-relative 
     * URL, or a URL relative to the content type resource folder for 
     * the content typeExceptions: Error CodeError Type NameCondition-2130575338Microsoft.SharePoint.SPExceptionList is not found 
     *   or has been deleted 
     * @var string
     */
    public function setDocumentTemplate($value)
    {
        $this->setProperty("DocumentTemplate", $value, true);
    }
    /**
     * Specifies 
     * the URL 
     * of the document template (1) 
     * assigned to the content type.
     * @return string
     */
    public function getDocumentTemplateUrl()
    {
        if (!$this->isPropertyAvailable("DocumentTemplateUrl")) {
            return null;
        }
        return $this->getProperty("DocumentTemplateUrl");
    }
    /**
     * Specifies 
     * the URL 
     * of the document template (1) 
     * assigned to the content type.
     * @var string
     */
    public function setDocumentTemplateUrl($value)
    {
        $this->setProperty("DocumentTemplateUrl", $value, true);
    }
    /**
     * Specifies 
     * the name of a custom edit formtemplate 
     * to use for list items that have 
     * been assigned the content type.
     * @return string
     */
    public function getEditFormTemplateName()
    {
        if (!$this->isPropertyAvailable("EditFormTemplateName")) {
            return null;
        }
        return $this->getProperty("EditFormTemplateName");
    }
    /**
     * Specifies 
     * the name of a custom edit formtemplate 
     * to use for list items that have 
     * been assigned the content type.
     * @var string
     */
    public function setEditFormTemplateName($value)
    {
        $this->setProperty("EditFormTemplateName", $value, true);
    }
    /**
     * Specifies 
     * the URL of a custom edit form to use for 
     * list 
     * items that have been assigned the content type.
     * @return string
     */
    public function getEditFormUrl()
    {
        if (!$this->isPropertyAvailable("EditFormUrl")) {
            return null;
        }
        return $this->getProperty("EditFormUrl");
    }
    /**
     * Specifies 
     * the URL of a custom edit form to use for 
     * list 
     * items that have been assigned the content type.
     * @var string
     */
    public function setEditFormUrl($value)
    {
        $this->setProperty("EditFormUrl", $value, true);
    }
    /**
     * Specifies 
     * the content 
     * type group for the content type.It MUST 
     * NOT be empty. Its length MUST be equal to or less than 128. 
     * @return string
     */
    public function getGroup()
    {
        if (!$this->isPropertyAvailable("Group")) {
            return null;
        }
        return $this->getProperty("Group");
    }
    /**
     * Specifies 
     * the content 
     * type group for the content type.It MUST 
     * NOT be empty. Its length MUST be equal to or less than 128. 
     * @var string
     */
    public function setGroup($value)
    {
        $this->setProperty("Group", $value, true);
    }
    /**
     * Specifies 
     * whether the content type is 
     * unavailable for creation or usage directly from a user interface.
     * @return bool
     */
    public function getHidden()
    {
        if (!$this->isPropertyAvailable("Hidden")) {
            return null;
        }
        return $this->getProperty("Hidden");
    }
    /**
     * Specifies 
     * whether the content type is 
     * unavailable for creation or usage directly from a user interface.
     * @var bool
     */
    public function setHidden($value)
    {
        $this->setProperty("Hidden", $value, true);
    }
    /**
     * Specifies 
     * an identifier for the content type as 
     * specified in [MS-WSSTS] 
     * section 2.1.2.8.1.
     * @return ContentTypeId
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * Specifies 
     * an identifier for the content type as 
     * specified in [MS-WSSTS] 
     * section 2.1.2.8.1.
     * @var ContentTypeId
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * Gets or 
     * sets the JSLink for the content type custom form template.<4>
     * @return string
     */
    public function getJSLink()
    {
        if (!$this->isPropertyAvailable("JSLink")) {
            return null;
        }
        return $this->getProperty("JSLink");
    }
    /**
     * Gets or 
     * sets the JSLink for the content type custom form template.<4>
     * @var string
     */
    public function setJSLink($value)
    {
        $this->setProperty("JSLink", $value, true);
    }
    /**
     * Specifies 
     * the URL of a custom mobile Display form page to use for items assigned this 
     * content type.
     * @return string
     */
    public function getMobileDisplayFormUrl()
    {
        if (!$this->isPropertyAvailable("MobileDisplayFormUrl")) {
            return null;
        }
        return $this->getProperty("MobileDisplayFormUrl");
    }
    /**
     * Specifies 
     * the URL of a custom mobile Display form page to use for items assigned this 
     * content type.
     * @var string
     */
    public function setMobileDisplayFormUrl($value)
    {
        $this->setProperty("MobileDisplayFormUrl", $value, true);
    }
    /**
     * Specifies 
     * the URL of a custom mobile edit form page to use for items assigned this 
     * content type.
     * @return string
     */
    public function getMobileEditFormUrl()
    {
        if (!$this->isPropertyAvailable("MobileEditFormUrl")) {
            return null;
        }
        return $this->getProperty("MobileEditFormUrl");
    }
    /**
     * Specifies 
     * the URL of a custom mobile edit form page to use for items assigned this 
     * content type.
     * @var string
     */
    public function setMobileEditFormUrl($value)
    {
        $this->setProperty("MobileEditFormUrl", $value, true);
    }
    /**
     * Specifies 
     * the URL of a custom mobile new form page to use for items assigned this content 
     * type.
     * @return string
     */
    public function getMobileNewFormUrl()
    {
        if (!$this->isPropertyAvailable("MobileNewFormUrl")) {
            return null;
        }
        return $this->getProperty("MobileNewFormUrl");
    }
    /**
     * Specifies 
     * the URL of a custom mobile new form page to use for items assigned this content 
     * type.
     * @var string
     */
    public function setMobileNewFormUrl($value)
    {
        $this->setProperty("MobileNewFormUrl", $value, true);
    }
    /**
     * Specifies 
     * the name of a custom display form 
     * template to use for list items that have 
     * been assigned the content type.
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * Specifies 
     * the name of a custom display form 
     * template to use for list items that have 
     * been assigned the content type.
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
    /**
     * Specifies 
     * the name of a custom new form template to 
     * use for list items that have 
     * been assigned the content type.
     * @return string
     */
    public function getNewFormTemplateName()
    {
        if (!$this->isPropertyAvailable("NewFormTemplateName")) {
            return null;
        }
        return $this->getProperty("NewFormTemplateName");
    }
    /**
     * Specifies 
     * the name of a custom new form template to 
     * use for list items that have 
     * been assigned the content type.
     * @var string
     */
    public function setNewFormTemplateName($value)
    {
        $this->setProperty("NewFormTemplateName", $value, true);
    }
    /**
     * Specifies 
     * the URL 
     * of a custom new form to use for list 
     * items that have been assigned the content type.
     * @return string
     */
    public function getNewFormUrl()
    {
        if (!$this->isPropertyAvailable("NewFormUrl")) {
            return null;
        }
        return $this->getProperty("NewFormUrl");
    }
    /**
     * Specifies 
     * the URL 
     * of a custom new form to use for list 
     * items that have been assigned the content type.
     * @var string
     */
    public function setNewFormUrl($value)
    {
        $this->setProperty("NewFormUrl", $value, true);
    }
    /**
     * Specifies 
     * whether changes to the content type 
     * properties are denied.
     * @return bool
     */
    public function getReadOnly()
    {
        if (!$this->isPropertyAvailable("ReadOnly")) {
            return null;
        }
        return $this->getProperty("ReadOnly");
    }
    /**
     * Specifies 
     * whether changes to the content type 
     * properties are denied.
     * @var bool
     */
    public function setReadOnly($value)
    {
        $this->setProperty("ReadOnly", $value, true);
    }
    /**
     * Specifies 
     * the XML 
     * schema that represents the content type.
     * @return string
     */
    public function getSchemaXml()
    {
        if (!$this->isPropertyAvailable("SchemaXml")) {
            return null;
        }
        return $this->getProperty("SchemaXml");
    }
    /**
     * Specifies 
     * the XML 
     * schema that represents the content type.
     * @var string
     */
    public function setSchemaXml($value)
    {
        $this->setProperty("SchemaXml", $value, true);
    }
    /**
     * Gets the 
     * unlocalized schema XML for the content type.
     * @return string
     */
    public function getSchemaXmlWithResourceTokens()
    {
        if (!$this->isPropertyAvailable("SchemaXmlWithResourceTokens")) {
            return null;
        }
        return $this->getProperty("SchemaXmlWithResourceTokens");
    }
    /**
     * Gets the 
     * unlocalized schema XML for the content type.
     * @var string
     */
    public function setSchemaXmlWithResourceTokens($value)
    {
        $this->setProperty("SchemaXmlWithResourceTokens", $value, true);
    }
    /**
     * Specifies 
     * a server-relative path to the content type scope 
     * of the content type. 
     * @return string
     */
    public function getScope()
    {
        if (!$this->isPropertyAvailable("Scope")) {
            return null;
        }
        return $this->getProperty("Scope");
    }
    /**
     * Specifies 
     * a server-relative path to the content type scope 
     * of the content type. 
     * @var string
     */
    public function setScope($value)
    {
        $this->setProperty("Scope", $value, true);
    }
    /**
     * Sealed<5> specifies whether the content 
     * type is sealed. Only a site collection administrator 
     * can set this value.
     * @return bool
     */
    public function getSealed()
    {
        if (!$this->isPropertyAvailable("Sealed")) {
            return null;
        }
        return $this->getProperty("Sealed");
    }
    /**
     * Sealed<5> specifies whether the content 
     * type is sealed. Only a site collection administrator 
     * can set this value.
     * @var bool
     */
    public function setSealed($value)
    {
        $this->setProperty("Sealed", $value, true);
    }
    /**
     * A string 
     * representation of the value of the Id (section 3.2.5.27.1.1.10).<6>
     * @return string
     */
    public function getStringId()
    {
        if (!$this->isPropertyAvailable("StringId")) {
            return null;
        }
        return $this->getProperty("StringId");
    }
    /**
     * A string 
     * representation of the value of the Id (section 3.2.5.27.1.1.10).<6>
     * @var string
     */
    public function setStringId($value)
    {
        $this->setProperty("StringId", $value, true);
    }
    /**
     * Specifies 
     * the collection of fields (2) for the content 
     * type. 
     * @return FieldCollection
     */
    public function getFields()
    {
        if (!$this->isPropertyAvailable("Fields")) {
            $this->setProperty("Fields", new FieldCollection($this->getContext(), new ResourcePath("Fields", $this->getResourcePath())));
        }
        return $this->getProperty("Fields");
    }
    /**
     * Specifies 
     * the parent content type of the 
     * content type.
     * @return ContentType
     */
    public function getParent()
    {
        if (!$this->isPropertyAvailable("Parent")) {
            $this->setProperty("Parent", new ContentType($this->getContext(), new ResourcePath("Parent", $this->getResourcePath())));
        }
        return $this->getProperty("Parent");
    }
    /**
     * @return UserResource
     */
    public function getDescriptionResource()
    {
        if (!$this->isPropertyAvailable("DescriptionResource")) {
            $this->setProperty("DescriptionResource", new UserResource($this->getContext(), new ResourcePath("DescriptionResource", $this->getResourcePath())));
        }
        return $this->getProperty("DescriptionResource");
    }
    /**
     * @return UserResource
     */
    public function getNameResource()
    {
        if (!$this->isPropertyAvailable("NameResource")) {
            $this->setProperty("NameResource", new UserResource($this->getContext(), new ResourcePath("NameResource", $this->getResourcePath())));
        }
        return $this->getProperty("NameResource");
    }
    /**
     * @return string
     */
    public function getClientFormCustomFormatter()
    {
        if (!$this->isPropertyAvailable("ClientFormCustomFormatter")) {
            return null;
        }
        return $this->getProperty("ClientFormCustomFormatter");
    }
    /**
     * @var string
     */
    public function setClientFormCustomFormatter($value)
    {
        $this->setProperty("ClientFormCustomFormatter", $value, true);
    }
}