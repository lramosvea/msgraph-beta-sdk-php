<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchHitsContainer implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<SearchAggregation>|null $aggregations Contains the collection of aggregations computed based on the provided aggregationOption specified in the request. */
    private ?array $aggregations = null;
    
    /** @var array<SearchHit>|null $hits A collection of the search results. */
    private ?array $hits = null;
    
    /** @var bool|null $moreResultsAvailable Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly. */
    private ?bool $moreResultsAvailable = null;
    
    /** @var int|null $total The total number of results. Note this is not the number of results on the page, but the total number of results satisfying the query. */
    private ?int $total = null;
    
    /**
     * Instantiates a new searchHitsContainer and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchHitsContainer
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SearchHitsContainer {
        return new SearchHitsContainer();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the aggregations property value. Contains the collection of aggregations computed based on the provided aggregationOption specified in the request.
     * @return array<SearchAggregation>|null
    */
    public function getAggregations(): ?array {
        return $this->aggregations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'aggregations' => function (self $o, ParseNode $n) { $o->setAggregations($n->getCollectionOfObjectValues(SearchAggregation::class)); },
            'hits' => function (self $o, ParseNode $n) { $o->setHits($n->getCollectionOfObjectValues(SearchHit::class)); },
            'moreResultsAvailable' => function (self $o, ParseNode $n) { $o->setMoreResultsAvailable($n->getBooleanValue()); },
            'total' => function (self $o, ParseNode $n) { $o->setTotal($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the hits property value. A collection of the search results.
     * @return array<SearchHit>|null
    */
    public function getHits(): ?array {
        return $this->hits;
    }

    /**
     * Gets the moreResultsAvailable property value. Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly.
     * @return bool|null
    */
    public function getMoreResultsAvailable(): ?bool {
        return $this->moreResultsAvailable;
    }

    /**
     * Gets the total property value. The total number of results. Note this is not the number of results on the page, but the total number of results satisfying the query.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('aggregations', $this->aggregations);
        $writer->writeCollectionOfObjectValues('hits', $this->hits);
        $writer->writeBooleanValue('moreResultsAvailable', $this->moreResultsAvailable);
        $writer->writeIntegerValue('total', $this->total);
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
     * Sets the aggregations property value. Contains the collection of aggregations computed based on the provided aggregationOption specified in the request.
     *  @param array<SearchAggregation>|null $value Value to set for the aggregations property.
    */
    public function setAggregations(?array $value ): void {
        $this->aggregations = $value;
    }

    /**
     * Sets the hits property value. A collection of the search results.
     *  @param array<SearchHit>|null $value Value to set for the hits property.
    */
    public function setHits(?array $value ): void {
        $this->hits = $value;
    }

    /**
     * Sets the moreResultsAvailable property value. Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly.
     *  @param bool|null $value Value to set for the moreResultsAvailable property.
    */
    public function setMoreResultsAvailable(?bool $value ): void {
        $this->moreResultsAvailable = $value;
    }

    /**
     * Sets the total property value. The total number of results. Note this is not the number of results on the page, but the total number of results satisfying the query.
     *  @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value ): void {
        $this->total = $value;
    }

}
