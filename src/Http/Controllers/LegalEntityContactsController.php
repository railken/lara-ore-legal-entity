<?php

namespace Railken\LaraOre\Http\Controllers;

use Railken\LaraOre\Api\Http\Controllers\RestController;
use Railken\LaraOre\Api\Http\Controllers\Traits as RestTraits;
use Railken\LaraOre\LegalEntityContact\LegalEntityContactManager;

class LegalEntityContactsController extends RestController
{
    use RestTraits\RestIndexTrait;
    use RestTraits\RestCreateTrait;
    use RestTraits\RestUpdateTrait;
    use RestTraits\RestShowTrait;
    use RestTraits\RestRemoveTrait;

    public $queryable = [
        'id',
        'value',
        'notes',
        'legal_entity_id',
        'taxonomy_id',
        'taxonomy_name',
        'created_at',
        'updated_at',
    ];

    public $fillable = [
        'value',
        'notes',
        'legal_entity_id',
        'taxonomy_id',
        'taxonomy_name',
    ];

    /**
     * Construct.
     */
    public function __construct(LegalEntityContactManager $manager)
    {
        $this->manager = $manager;
        $this->manager->setAgent($this->getUser());
        parent::__construct();
    }

    /**
     * Create a new instance for query.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function getQuery()
    {
        return $this->manager->repository->getQuery();
    }
}
