<?php

namespace Superlatif\InfomaniakVod\Enums;

enum Status: int
{
    case UPLOADING = 72;
    case PROCESSING = 100;
    case AVAILABLE = 192;
}
