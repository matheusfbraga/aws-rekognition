<?php

declare(strict_types=1);

namespace MoeMizrak\Rekognition\Facades;

use Illuminate\Support\Facades\Facade;
use MoeMizrak\Rekognition\Data\CreateCollectionData;
use MoeMizrak\Rekognition\Data\DeleteCollectionData;
use MoeMizrak\Rekognition\Data\DetectLabelsData;
use MoeMizrak\Rekognition\Data\ListCollectionsData;
use MoeMizrak\Rekognition\Data\ResultData\CreateCollectionResultData;
use MoeMizrak\Rekognition\Data\ResultData\DeleteCollectionResultData;
use MoeMizrak\Rekognition\Data\ResultData\ListCollectionsResultData;
use MoeMizrak\Rekognition\Data\ResultData\DetectLabelsResultData;

/**
 * Facade for AWS Rekognition.
 *
 * @method static DetectLabelsResultData detectLabels(DetectLabelsData $detectLabelsData) Detects instances of real-world labels within an image (JPEG or PNG) provided as input.
 * @method static CreateCollectionResultData createCollection(CreateCollectionData $createCollectionData) Creates a collection in an AWS Region.
 * @method static DeleteCollectionResultData deleteCollection(DeleteCollectionData $deleteCollectionData) Deletes the specified collection. Warning! Note that this operation removes all faces in the collection.
 * @method static ListCollectionsResultData listCollections(ListCollectionsData $listCollectionsData) Lists the collections in an AWS account.
 *
 * For more information, see https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-rekognition-2016-06-27.html
 *
 * @class Rekognition
 */
final class Rekognition extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'aws-rekognition';
    }
}