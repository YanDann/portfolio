<?php

function isSelected(string $value, string $selected): string
{
    return ($selected === $value) ? 'style="border-left: 2px #64ffda solid; color: #64ffda;"' : '';
}

