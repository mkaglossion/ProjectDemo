<?php

declare(strict_types=1);

namespace App;

use Laravel\Boost\Contracts\Agent;
use Laravel\Boost\Contracts\McpClient;
use Laravel\Boost\Install\CodeEnvironment\CodeEnvironment;
use Laravel\Boost\Install\Enums\Platform;

class OpenCode extends CodeEnvironment implements Agent, McpClient
{
    public function name(): string
    {
        return 'opencode';
    }

    public function displayName(): string
    {
        return 'OpenCode';
    }

    public function systemDetectionConfig(Platform $platform): array
    {
        return match ($platform) {
            Platform::Windows => [
                'command' => 'where opencode',
            ],
            Platform::Darwin => [
                'paths' => ['/Applications/OpenCode.app'],
            ],
            Platform::Linux => [
                'command' => 'which opencode',
            ],
        };
    }

    public function projectDetectionConfig(): array
    {
        return [
            'files' => ['.opencode'],
        ];
    }

    public function guidelinesPath(): string
    {
        return '.opencode/guidelines.md';
    }
}