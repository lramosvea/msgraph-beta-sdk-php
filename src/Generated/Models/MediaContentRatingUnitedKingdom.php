<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaContentRatingUnitedKingdom implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RatingUnitedKingdomMoviesType|null $movieRating Movies rating labels in United Kingdom
    */
    private ?RatingUnitedKingdomMoviesType $movieRating = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var RatingUnitedKingdomTelevisionType|null $tvRating TV content rating labels in United Kingdom
    */
    private ?RatingUnitedKingdomTelevisionType $tvRating = null;
    
    /**
     * Instantiates a new mediaContentRatingUnitedKingdom and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mediaContentRatingUnitedKingdom');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaContentRatingUnitedKingdom
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaContentRatingUnitedKingdom {
        return new MediaContentRatingUnitedKingdom();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'movieRating' => function (ParseNode $n) use ($o) { $o->setMovieRating($n->getEnumValue(RatingUnitedKingdomMoviesType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'tvRating' => function (ParseNode $n) use ($o) { $o->setTvRating($n->getEnumValue(RatingUnitedKingdomTelevisionType::class)); },
        ];
    }

    /**
     * Gets the movieRating property value. Movies rating labels in United Kingdom
     * @return RatingUnitedKingdomMoviesType|null
    */
    public function getMovieRating(): ?RatingUnitedKingdomMoviesType {
        return $this->movieRating;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the tvRating property value. TV content rating labels in United Kingdom
     * @return RatingUnitedKingdomTelevisionType|null
    */
    public function getTvRating(): ?RatingUnitedKingdomTelevisionType {
        return $this->tvRating;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('movieRating', $this->movieRating);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('tvRating', $this->tvRating);
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
     * Sets the movieRating property value. Movies rating labels in United Kingdom
     *  @param RatingUnitedKingdomMoviesType|null $value Value to set for the movieRating property.
    */
    public function setMovieRating(?RatingUnitedKingdomMoviesType $value ): void {
        $this->movieRating = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the tvRating property value. TV content rating labels in United Kingdom
     *  @param RatingUnitedKingdomTelevisionType|null $value Value to set for the tvRating property.
    */
    public function setTvRating(?RatingUnitedKingdomTelevisionType $value ): void {
        $this->tvRating = $value;
    }

}
