<?php
/**
 * This file is part of ruogoo.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace Ruogoo\OpenSearch;

trait OpenSearchable
{
    /**
     * Get the app name for the model defined in Aliyun Open Search.
     * @return string
     */
    public function openSearchAppName(): string
    {
        return config('scout.prefix') . $this->getTable();
    }

    /**
     * Get the sort field for the model.
     * @return string
     */
    public function sortField(): string
    {
        return $this->primaryKey;
    }
}
