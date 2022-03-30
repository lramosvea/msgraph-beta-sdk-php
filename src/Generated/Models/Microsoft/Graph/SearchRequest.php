<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchRequest implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $aggregationFilters Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses. */
    private ?array $aggregationFilters = null;
    
    /** @var array<AggregationOption>|null $aggregations Specifies aggregations (also known as refiners) to be returned alongside search results. Optional. */
    private ?array $aggregations = null;
    
    /** @var array<string>|null $contentSources Contains the connection to be targeted. Respects the following format : /external/connections/connectionid where connectionid is the ConnectionId defined in the Connectors Administration.  Note: contentSource is only applicable when entityType=externalItem. Optional. */
    private ?array $contentSources = null;
    
    /** @var bool|null $enableTopResults This triggers hybrid sort for messages: the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional. */
    private ?bool $enableTopResults = null;
    
    /** @var array<EntityType>|null $entityTypes One or more types of resources expected in the response. Possible values are: list, site, listItem, message, event, drive, driveItem, person, externalItem. See known limitations for those combinations of two or more entity types that are supported in the same search request. Required. */
    private ?array $entityTypes = null;
    
    /** @var array<string>|null $fields Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from content that Microsoft Graph connectors bring in. The fields property can be using the semantic labels applied to properties. For example, if a property is label as title, you can retrieve it using the following syntax : label_title.Optional. */
    private ?array $fields = null;
    
    /** @var int|null $from Specifies the offset for the search results. Offset 0 returns the very first result. Optional. */
    private ?int $from = null;
    
    /** @var SearchQuery|null $query  */
    private ?SearchQuery $query = null;
    
    /** @var SearchAlterationOptions|null $queryAlterationOptions Query alteration options formatted in a JSON blob that contains two optional flags related to spelling correction. Optional. */
    private ?SearchAlterationOptions $queryAlterationOptions = null;
    
    /** @var ResultTemplateOption|null $resultTemplateOptions Provides the search result templates options for rendering connectors search results. */
    private ?ResultTemplateOption $resultTemplateOptions = null;
    
    /** @var int|null $size The size of the page to be retrieved. Optional. */
    private ?int $size = null;
    
    /** @var array<SortProperty>|null $sortProperties Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional. */
    private ?array $sortProperties = null;
    
    /** @var array<string>|null $stored_fields  */
    private ?array $stored_fields = null;
    
    /** @var bool|null $trimDuplicates  */
    private ?bool $trimDuplicates = null;
    
    /**
     * Instantiates a new searchRequest and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchRequest
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SearchRequest {
        return new SearchRequest();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the aggregationFilters property value. Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
     * @return array<string>|null
    */
    public function getAggregationFilters(): ?array {
        return $this->aggregationFilters;
    }

    /**
     * Gets the aggregations property value. Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
     * @return array<AggregationOption>|null
    */
    public function getAggregations(): ?array {
        return $this->aggregations;
    }

    /**
     * Gets the contentSources property value. Contains the connection to be targeted. Respects the following format : /external/connections/connectionid where connectionid is the ConnectionId defined in the Connectors Administration.  Note: contentSource is only applicable when entityType=externalItem. Optional.
     * @return array<string>|null
    */
    public function getContentSources(): ?array {
        return $this->contentSources;
    }

    /**
     * Gets the enableTopResults property value. This triggers hybrid sort for messages: the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
     * @return bool|null
    */
    public function getEnableTopResults(): ?bool {
        return $this->enableTopResults;
    }

    /**
     * Gets the entityTypes property value. One or more types of resources expected in the response. Possible values are: list, site, listItem, message, event, drive, driveItem, person, externalItem. See known limitations for those combinations of two or more entity types that are supported in the same search request. Required.
     * @return array<EntityType>|null
    */
    public function getEntityTypes(): ?array {
        return $this->entityTypes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'aggregationFilters' => function (self $o, ParseNode $n) { $o->setAggregationFilters($n->getCollectionOfPrimitiveValues()); },
            'aggregations' => function (self $o, ParseNode $n) { $o->setAggregations($n->getCollectionOfObjectValues(AggregationOption::class)); },
            'contentSources' => function (self $o, ParseNode $n) { $o->setContentSources($n->getCollectionOfPrimitiveValues()); },
            'enableTopResults' => function (self $o, ParseNode $n) { $o->setEnableTopResults($n->getBooleanValue()); },
            'entityTypes' => function (self $o, ParseNode $n) { $o->setEntityTypes($n->getCollectionOfEnumValues(EntityType::class)); },
            'fields' => function (self $o, ParseNode $n) { $o->setFields($n->getCollectionOfPrimitiveValues()); },
            'from' => function (self $o, ParseNode $n) { $o->setFrom($n->getIntegerValue()); },
            'query' => function (self $o, ParseNode $n) { $o->setQuery($n->getObjectValue(SearchQuery::class)); },
            'queryAlterationOptions' => function (self $o, ParseNode $n) { $o->setQueryAlterationOptions($n->getObjectValue(SearchAlterationOptions::class)); },
            'resultTemplateOptions' => function (self $o, ParseNode $n) { $o->setResultTemplateOptions($n->getObjectValue(ResultTemplateOption::class)); },
            'size' => function (self $o, ParseNode $n) { $o->setSize($n->getIntegerValue()); },
            'sortProperties' => function (self $o, ParseNode $n) { $o->setSortProperties($n->getCollectionOfObjectValues(SortProperty::class)); },
            'stored_fields' => function (self $o, ParseNode $n) { $o->setStored_fields($n->getCollectionOfPrimitiveValues()); },
            'trimDuplicates' => function (self $o, ParseNode $n) { $o->setTrimDuplicates($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the fields property value. Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from content that Microsoft Graph connectors bring in. The fields property can be using the semantic labels applied to properties. For example, if a property is label as title, you can retrieve it using the following syntax : label_title.Optional.
     * @return array<string>|null
    */
    public function getFields(): ?array {
        return $this->fields;
    }

    /**
     * Gets the from property value. Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
     * @return int|null
    */
    public function getFrom(): ?int {
        return $this->from;
    }

    /**
     * Gets the query property value. 
     * @return SearchQuery|null
    */
    public function getQuery(): ?SearchQuery {
        return $this->query;
    }

    /**
     * Gets the queryAlterationOptions property value. Query alteration options formatted in a JSON blob that contains two optional flags related to spelling correction. Optional.
     * @return SearchAlterationOptions|null
    */
    public function getQueryAlterationOptions(): ?SearchAlterationOptions {
        return $this->queryAlterationOptions;
    }

    /**
     * Gets the resultTemplateOptions property value. Provides the search result templates options for rendering connectors search results.
     * @return ResultTemplateOption|null
    */
    public function getResultTemplateOptions(): ?ResultTemplateOption {
        return $this->resultTemplateOptions;
    }

    /**
     * Gets the size property value. The size of the page to be retrieved. Optional.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the sortProperties property value. Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
     * @return array<SortProperty>|null
    */
    public function getSortProperties(): ?array {
        return $this->sortProperties;
    }

    /**
     * Gets the stored_fields property value. 
     * @return array<string>|null
    */
    public function getStored_fields(): ?array {
        return $this->stored_fields;
    }

    /**
     * Gets the trimDuplicates property value. 
     * @return bool|null
    */
    public function getTrimDuplicates(): ?bool {
        return $this->trimDuplicates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aggregationFilters', $this->aggregationFilters);
        $writer->writeCollectionOfObjectValues('aggregations', $this->aggregations);
        $writer->writeCollectionOfPrimitiveValues('contentSources', $this->contentSources);
        $writer->writeBooleanValue('enableTopResults', $this->enableTopResults);
        $writer->writeCollectionOfEnumValues('entityTypes', $this->entityTypes);
        $writer->writeCollectionOfPrimitiveValues('fields', $this->fields);
        $writer->writeIntegerValue('from', $this->from);
        $writer->writeObjectValue('query', $this->query);
        $writer->writeObjectValue('queryAlterationOptions', $this->queryAlterationOptions);
        $writer->writeObjectValue('resultTemplateOptions', $this->resultTemplateOptions);
        $writer->writeIntegerValue('size', $this->size);
        $writer->writeCollectionOfObjectValues('sortProperties', $this->sortProperties);
        $writer->writeCollectionOfPrimitiveValues('stored_fields', $this->stored_fields);
        $writer->writeBooleanValue('trimDuplicates', $this->trimDuplicates);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the aggregationFilters property value. Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
     *  @param array<string>|null $value Value to set for the aggregationFilters property.
    */
    public function setAggregationFilters(?array $value ): void {
        $this->aggregationFilters = $value;
    }

    /**
     * Sets the aggregations property value. Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
     *  @param array<AggregationOption>|null $value Value to set for the aggregations property.
    */
    public function setAggregations(?array $value ): void {
        $this->aggregations = $value;
    }

    /**
     * Sets the contentSources property value. Contains the connection to be targeted. Respects the following format : /external/connections/connectionid where connectionid is the ConnectionId defined in the Connectors Administration.  Note: contentSource is only applicable when entityType=externalItem. Optional.
     *  @param array<string>|null $value Value to set for the contentSources property.
    */
    public function setContentSources(?array $value ): void {
        $this->contentSources = $value;
    }

    /**
     * Sets the enableTopResults property value. This triggers hybrid sort for messages: the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
     *  @param bool|null $value Value to set for the enableTopResults property.
    */
    public function setEnableTopResults(?bool $value ): void {
        $this->enableTopResults = $value;
    }

    /**
     * Sets the entityTypes property value. One or more types of resources expected in the response. Possible values are: list, site, listItem, message, event, drive, driveItem, person, externalItem. See known limitations for those combinations of two or more entity types that are supported in the same search request. Required.
     *  @param array<EntityType>|null $value Value to set for the entityTypes property.
    */
    public function setEntityTypes(?array $value ): void {
        $this->entityTypes = $value;
    }

    /**
     * Sets the fields property value. Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from content that Microsoft Graph connectors bring in. The fields property can be using the semantic labels applied to properties. For example, if a property is label as title, you can retrieve it using the following syntax : label_title.Optional.
     *  @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value ): void {
        $this->fields = $value;
    }

    /**
     * Sets the from property value. Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
     *  @param int|null $value Value to set for the from property.
    */
    public function setFrom(?int $value ): void {
        $this->from = $value;
    }

    /**
     * Sets the query property value. 
     *  @param SearchQuery|null $value Value to set for the query property.
    */
    public function setQuery(?SearchQuery $value ): void {
        $this->query = $value;
    }

    /**
     * Sets the queryAlterationOptions property value. Query alteration options formatted in a JSON blob that contains two optional flags related to spelling correction. Optional.
     *  @param SearchAlterationOptions|null $value Value to set for the queryAlterationOptions property.
    */
    public function setQueryAlterationOptions(?SearchAlterationOptions $value ): void {
        $this->queryAlterationOptions = $value;
    }

    /**
     * Sets the resultTemplateOptions property value. Provides the search result templates options for rendering connectors search results.
     *  @param ResultTemplateOption|null $value Value to set for the resultTemplateOptions property.
    */
    public function setResultTemplateOptions(?ResultTemplateOption $value ): void {
        $this->resultTemplateOptions = $value;
    }

    /**
     * Sets the size property value. The size of the page to be retrieved. Optional.
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the sortProperties property value. Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
     *  @param array<SortProperty>|null $value Value to set for the sortProperties property.
    */
    public function setSortProperties(?array $value ): void {
        $this->sortProperties = $value;
    }

    /**
     * Sets the stored_fields property value. 
     *  @param array<string>|null $value Value to set for the stored_fields property.
    */
    public function setStored_fields(?array $value ): void {
        $this->stored_fields = $value;
    }

    /**
     * Sets the trimDuplicates property value. 
     *  @param bool|null $value Value to set for the trimDuplicates property.
    */
    public function setTrimDuplicates(?bool $value ): void {
        $this->trimDuplicates = $value;
    }

}
